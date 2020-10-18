<?php

namespace App\Http\Controllers\Admin\Password;

use App\Http\Controllers\Controller;
use App\Services\General\DatatableService;
use App\Services\General\Password\PasswordService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    /**
     * @var DatatableService
     */
    private $datatableService;
    /**
     * @var PasswordService
     */
    private $passwordService;

    /**
     * PasswordController constructor.
     * @param DatatableService $datatableService
     * @param PasswordService $passwordService
     */
    public function __construct(
        DatatableService $datatableService,
        PasswordService $passwordService
    )
    {
        $this->datatableService = $datatableService;
        $this->passwordService = $passwordService;
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
            'editUrl' => 'admin.password.edit',
            'editIcon' => 'fa fa-edit',
            'editClass' => '',
            'delete' => false,
            'deleteUrl' => 'admin.password.destroy',
            'deleteIcon' => 'fa fa-trash',
            'deleteClass' => '',
            'view' => false,
            'viewUrl' => 'admin.password.show',
            'viewIcon' => 'fa fa-eye',
            'viewClass' => '',
        ];

        $query = $this->datatableService->getData(
            'users',
            null,
            [
                'id',
                'email',
                'password'
            ],
            null,
            [],
            []
        );



        $query->editColumn('password', function ($data) {
            return decrypt($data->password);
        });
        $query->addColumn('action', function ($data) use($actionData) {
            $id = $data->id;
            return view('general.datatable.action', compact('actionData', 'id'));
        });


        return $query->make();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.password.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->passwordService->create($request->all());

        return redirect()->route('admin.password.index');
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
        $password = $this->passwordService->findOrFail($id);

        return view('admin.password.edit', compact('password'));
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
        $this->passwordService->update($id, $request->all());

        return redirect()->route('admin.password.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
