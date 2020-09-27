<?php

namespace App\Http\Controllers\Admin\Notice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NoticeRequest;
use App\Services\General\DatatableService;
use App\Services\General\Notice\NoticeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var NoticeService
     */
    private $noticeService;

    /**
     * NoticeController constructor.
     * @param DatatableService $datatableService
     * @param NoticeService $noticeService
     */
    public function __construct(
        DatatableService $datatableService,
        NoticeService $noticeService
    )
    {
        $this->datatableService = $datatableService;
        $this->noticeService = $noticeService;
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
            'editUrl' => 'admin.notice.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.notice.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => true,
            'viewUrl' => 'admin.notice.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'notices',
            null,
            [
                'id',
                'notice',
                'status'
            ],
            null,
            [],
            ['notices.deleted_at']
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
            return view('admin.notice.switch', compact('name', 'disabled', 'checked', 'id'));
        });

        $query->editColumn('notice', function ($data) {
            return  strip_tags(Str::limit($data->notice,100));
        });

        $query->addIndexColumn();

        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });

        $query->rawColumns(['status', 'notice', 'action']);

        return $query->make();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.notice.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        $this->noticeService->create($request->all());

        return redirect()->route('admin.notice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = $this->noticeService->findOrFail($id);
        return view('admin.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = $this->noticeService->findOrFail($id);

        return view('admin.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, $id)
    {
        $this->noticeService->update($id, $request->all());

        return redirect()->route('admin.notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->noticeService->findOrFail($id)->delete();
        return redirect()->route('admin.notice.index');
    }
    public function changeStatus($id) {
        $test = $this->noticeService->findOrFail($id);
        DB::beginTransaction();
        // event(new TestPublished($test));
        $test->status = !$test->status;
        $test->save();
        DB::commit();

        return;
    }
}
