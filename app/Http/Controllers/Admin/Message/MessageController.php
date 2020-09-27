<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Services\General\DatatableService;
use App\Services\General\Message\MessageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var MessageService
     */
    private $messageService;

    /**
     * MessageController constructor.
     * @param DatatableService $datatableService
     * @param MessageService $messageService
     */
    public function __construct(
        DatatableService $datatableService,
        MessageService $messageService
    )
    {
        $this->datatableService = $datatableService;
        $this->messageService = $messageService;
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
            'editUrl' => 'admin.message.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => true,
            'deleteUrl' => 'admin.message.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => true,
            'viewUrl' => 'admin.message.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'messages',
            null,
            [
                'id',
                'image',
                'message_from_md'
            ],
            null,
            [],
            ['messages.deleted_at']
        );



        $query->editColumn('message_from_md', function ($data) {
            return  strip_tags(Str::limit($data->message_from_md,100));
        });
        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });
        $query->addIndexColumn();


        $query->rawColumns(['message_from_md', 'action']);

        return $query->make();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.message.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.message.create');
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
                'image' => Storage::putFileAs('public/message/images', $image, $image_name)
            ]
        );
        $this->messageService->create($storeData);


        return redirect()->route('admin.message.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = $this->messageService->findOrFail($id);

        return view('admin.message.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = $this->messageService->findOrFail($id);

        return view('admin.about.edit', compact('message'));
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
                    'image' => Storage::putFileAs('public/message/images', $image, $image_name)
                ]);
        }
        $setting = $this->messageService->findOrFail($id);

        $this->messageService->update($id, $updateData);
        $oldImage = $setting->image;
        if($oldImage && $request->file('image')) {
            Storage::delete($oldImage);
        }

        return redirect()->route('admin.message.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->messageService->findOrFail($id)->delete();

        return redirect()->route('admin.message.index');
    }
}
