<?php

namespace App\Http\Controllers\Admin\Abroad;

use App\Http\Controllers\Controller;
use App\Services\General\Abroad\AbroadService;
use App\Services\General\DatatableService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AbroadController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var AbroadService
     */
    private $abroadService;

    /**
     * AbroadController constructor.
     * @param DatatableService $datatableService
     * @param AbroadService $abroadService
     */
    public function __construct(
        DatatableService $datatableService,
        AbroadService $abroadService
    )
    {
        $this->datatableService = $datatableService;
        $this->abroadService = $abroadService;
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
            'editUrl' => 'admin.abroad.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.abroad.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => true,
            'viewUrl' => 'admin.abroad.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'abroads',
            null,
            [
                'id',
                'name',
                'image',
                'description',
                'course_name',
                'course_duration',
                'intake',
                'requirements'

            ],
            null,
            [],
            ['abroads.deleted_at']
        );

        $query->editColumn('description', function ($data) {
            return  strip_tags(Str::limit($data->description,100));
        });
        $query->addIndexColumn();


        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });

        $query->rawColumns(['description', 'action']);

        return $query->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.abroad.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abroad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $storeData = array_merge(
            $request->all(),
            [
                'image' => Storage::putFileAs('public/abroad/images/', $image, $image_name)
            ]
        );
        $this->abroadService->create($storeData);

        return redirect()->route('admin.abroad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abroad = $this->abroadService->findOrFail($id);
        return view('admin.abroad.show', compact('abroad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abroad = $this->abroadService->findOrFail($id);

        return view('admin.abroad.edit', compact('abroad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        if($request->file('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $updateData = array_merge(
                $updateData,
                [
                    'image' => Storage::putFileAs('public/abroad/images', $image, $image_name)
                ]);
        }
        $abroad = $this->abroadService->findOrFail($id);
        $this->abroadService->update($id, $updateData);
        $oldImage = $abroad->image;
        if($oldImage && $request->file('image')) {
            Storage::delete($oldImage);
        }

        return redirect()->route('admin.abroad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->abroadService->findOrFail($id)->delete();
        return redirect()->route('admin.abroad.index');
    }
}
