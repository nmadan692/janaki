<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Services\General\Course\CourseService;
use App\Services\General\DatatableService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var CourseService
     */
    private $courseService;

    /**
     * CourseController constructor.
     * @param DatatableService $datatableService
     * @param CourseService $courseService
     */
    public function __construct(
        DatatableService $datatableService,
        CourseService $courseService
    )
    {
        $this->datatableService = $datatableService;
        $this->courseService = $courseService;
    }
    /**
     * @return mixed
     * @throws \Exception
     */
    public function list() {
        $actionData = [
            'icon' => true,
            'text' => false,
            'edit' => true,
            'editUrl' => 'admin.course.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.course.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => true,
            'viewUrl' => 'admin.course.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'courses',
            null,
            [
                'id',
                'name',
                'image',
                'description',
                'apply_process',
                'certification',
                'start_date',
                'deadline',
                'duration',
                'class_duration',
                'seats',
                'fee',
                'skill_level',
                'status'

            ],
            null,
            [],
            ['courses.deleted_at']
        );
        $query->addIndexColumn();

        $query->editColumn('description', function ($data) {
            return  strip_tags(Str::limit($data->description,100));
        });
        $query->editColumn('status', function ($data) {
            $id = $data->id;
            $name = 'status';
            $checked = false;
            $disabled = false;
            if($data->status == 1) {
                $checked = true;
                $disabled = true;
            }
            return view('admin.course.switch', compact('name', 'disabled', 'checked', 'id'));
        });
        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });

        $query->rawColumns(['description', 'status', 'action']);

        return $query->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $storeData = array_merge(
            $request->all(),
            [
                'image' => Storage::putFileAs('public/course/images/', $image, $image_name)
            ]
        );
        $this->courseService->create($storeData);

        return redirect()->route('admin.course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = $this->courseService->findOrFail($id);
        return view('admin.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->courseService->findOrFail($id);

        return view('admin.course.edit', compact('course'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $updateData = $request->all();
        if($request->file('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $updateData = array_merge(
                $updateData,
                [
                    'image' => Storage::putFileAs('public/course/images', $image, $image_name)
                ]);
        }
        $blog = $this->courseService->findOrFail($id);
        $this->courseService->update($id, $updateData);
        $oldImage = $blog->image;
        if($oldImage && $request->file('image')) {
            Storage::delete($oldImage);
        }

        return redirect()->route('admin.course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->courseService->findOrFail($id)->delete();
        return redirect()->route('admin.course.index');
    }
    public function changeStatus($id) {
        $test = $this->courseService->findOrFail($id);
        DB::beginTransaction();
        // event(new TestPublished($test));
        $test->status = !$test->status;
        $test->save();
        DB::commit();

        return;
    }
}
