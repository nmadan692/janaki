<?php

namespace App\Http\Controllers\Admin\Download;

use App\Http\Controllers\Controller;
use App\Services\General\DatatableService;
use App\Services\General\Download\DownloadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DownloadController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var DownloadService
     */
    private $downloadService;

    /**
     * DownloadController constructor.
     * @param DatatableService $datatableService
     * @param DownloadService $downloadService
     */
    public function __construct(
        DatatableService $datatableService,
        DownloadService $downloadService
    )
    {
        $this->datatableService = $datatableService;
        $this->downloadService = $downloadService;
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
            'editUrl' => 'admin.download.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.download.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => false,
            'viewUrl' => 'admin.download.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'downloads',
            null,
            [
                'id',
                'name',
                'description',
                'file',
                'status'
            ],
            null,
            [],
            ['downloads.deleted_at']
        );

        $query->editColumn('status', function ($data) {
            $id = $data->id;
            $name = 'status';
            $checked = false;
            $disabled = false;
            if($data->status == 1) {
                $checked = true;
                $disabled = true;
            }
            return view('admin.download.switch', compact('name', 'disabled', 'checked', 'id'));
        });



        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });

        $query->addIndexColumn();

        $query->rawColumns(['status', 'action']);

        return $query->make();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.download.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $image = $request->file('image');
//        $image_name = time() . '.' . $image->getClientOriginalExtension();
//
//        $storeData = array_merge(
//            $request->all(),
//            [
//                'image' => Storage::putFileAs('public/download/images', $image, $image_name)
//            ]
//        );
//        $this->downloadService->create($storeData);

        $this->downloadService->create($request->all());

        return redirect()->route('admin.download.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $download = $this->downloadService->findOrFail($id);

        return view('admin.download.edit', compact('download'));
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
//        $updateData = $request->all();
//        if($request->file('image')) {
//            $image = $request->file('image');
//            $image_name = time() . '.' . $image->getClientOriginalExtension();
//            $updateData = array_merge(
//                $updateData,
//                [
//                    'image' => Storage::putFileAs('public/download/images', $image, $image_name)
//                ]);
//        }
//        $download = $this->downloadService->findOrFail($id);
//
//        $this->downloadService->update($id, $updateData);
//        $oldImage = $download->image;
//        if($oldImage && $request->file('image')) {
//            Storage::delete($oldImage);
//        }
        $this->downloadService->update($id, $request->all());

        return redirect()->route('admin.download.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->downloadService->findOrFail($id)->delete();
        return redirect()->route('admin.download.index');
    }
    public function changeStatus($id) {
        $test = $this->downloadService->findOrFail($id);
        DB::beginTransaction();
        // event(new TestPublished($test));
        $test->status = !$test->status;
        $test->save();
        DB::commit();

        return;
    }
}
