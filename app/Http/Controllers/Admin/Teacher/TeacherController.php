<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeacherRequest;
use App\Services\General\DatatableService;
use App\Services\General\Teacher\TeacherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var TeacherService
     */
    private $teacherService;

    /**
     * TeacherController constructor.
     * @param DatatableService $datatableService
     * @param TeacherService $teacherService
     */
    public function __construct(
        DatatableService $datatableService,
        TeacherService $teacherService
    )
    {
        $this->datatableService = $datatableService;
        $this->teacherService = $teacherService;
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
            'editUrl' => 'admin.teacher.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.teacher.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => true,
            'viewUrl' => 'admin.teacher.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'teachers',
            null,
            [
                'id',
                'name',
                'subject',
                'image',
                'facebook',
                'instagram',
                'linkedin',
                'twitter'

            ],
            null,
            [],
            ['teachers.deleted_at']
        );

        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });
        $query->addIndexColumn();

        return $query->make();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $storeData = array_merge(
            $request->all(),
            [
                'image' => Storage::putFileAs('public/teacher/images', $image, $image_name)
            ]
        );
        $this->teacherService->create($storeData);


        return redirect()->route('admin.teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = $this->teacherService->findOrFail($id);

        return view('admin.teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = $this->teacherService->findOrFail($id);

        return view('admin.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $updateData = $request->all();
        if($request->file('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $updateData = array_merge(
                $updateData,
                [
                    'image' => Storage::putFileAs('public/teacher/images', $image, $image_name)
                ]);
        }
        $teacher = $this->teacherService->findOrFail($id);

        $this->teacherService->update($id, $updateData);
        $oldImage = $teacher->image;
        if($oldImage && $request->file('image')) {
            Storage::delete($oldImage);
        }

        return redirect()->route('admin.teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teacherService->findOrFail($id)->delete();

        return redirect()->route('admin.teacher.index');
    }
}
