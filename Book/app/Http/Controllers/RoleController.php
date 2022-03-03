<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Roles\CreateRoleRequest;
use App\Http\Requests\Roles\UpdateRoleRequest;
use Spatie\Permission\Commands\CreateRole;

class RoleController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }


    public function index()
    {
        $data = $this->roleService->getAll();
        // auth()->role()->givePermissionTo('edit articles', 'delete articles', 'create articles');
        // $role->assignRole('writer');
        return view('roles.index' , ['data' => $data]);
    }

    public function show($id)
    {
        $role = $this->roleService->getById($id);

        return view('roles.show' , ['role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        $data = $request->all();
        $this->roleService->getCreate($request);
        return redirect(route('roles.index'));
    }
    public function edit($id)
    {
        $role = $this->roleService->getById($id);

        return view('roles.edit' , compact('role'));
    }
    public function update(UpdateRoleRequest $request, $id)
    {
        // $data = $request->all();
        // $data['password'] = Hash::make($request->password);
        $this->roleService->getUpdate($request, $id);
        return redirect(route('roles.index'));
    }
    public function destroy($id)
    {
        $this->roleService->getDestroy($id);
        return redirect(route('roles.index'));
    }

    public function search(Request $request)
    {
        $data = $this->roleService->getRole($request->search);
        return view('roles.index', compact('data'));
    }


}
