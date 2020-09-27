<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Services\General\About\AboutService;
use App\Services\General\DatatableService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var AboutService
     */
    private $aboutService;

    /**
     * AboutController constructor.
     * @param DatatableService $datatableService
     * @param AboutService $aboutService
     */
    public function __construct(
        DatatableService $datatableService,
        AboutService $aboutService
    )
    {
        $this->datatableService = $datatableService;
        $this->aboutService = $aboutService;
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
            'editUrl' => 'admin.about.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.about.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => true,
            'viewUrl' => 'admin.about.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'abouts',
            null,
            [
                'id',
                'image',
                'about_us',
                'message_from_md'
            ],
            null,
            [],
            ['abouts.deleted_at']
        );

        $query->editColumn('about_us', function ($data) {
            return  strip_tags(Str::limit($data->about_us,100));
        });

        $query->editColumn('message_from_md', function ($data) {
            return  strip_tags(Str::limit($data->message_from_md,100));
        });
        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });
        $query->addIndexColumn();


        $query->rawColumns(['about_us', 'message_from_md', 'action']);

        return $query->make();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $storeData = array_merge(
            $request->all(),
            [
                'image' => Storage::putFileAs('public/about/images', $image, $image_name)
            ]
        );
        $this->aboutService->create($storeData);


        return redirect()->route('admin.about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = $this->aboutService->findOrFail($id);

        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = $this->aboutService->findOrFail($id);

        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, $id)
    {
        $updateData = $request->all();
        if($request->file('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $updateData = array_merge(
                $updateData,
                [
                    'image' => Storage::putFileAs('public/about/images', $image, $image_name)
                ]);
        }
        $setting = $this->aboutService->findOrFail($id);

        $this->aboutService->update($id, $updateData);
        $oldImage = $setting->image;
        if($oldImage && $request->file('image')) {
            Storage::delete($oldImage);
        }

        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->aboutService->findOrFail($id)->delete();

        return redirect()->route('admin.about.index');
    }
}

