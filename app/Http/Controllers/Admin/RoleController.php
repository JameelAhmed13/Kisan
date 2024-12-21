<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UpdateRoleRequest;
use App\Models\AccessLevel;
use App\Models\Module;
use App\Models\Privileges;
use App\Models\User;
use Illuminate\Http\Request;
use App\DataTables\RoleDataTable;
use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\RoleRepository;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Requests\Admin\CreateRoleRequest;

class RoleController extends Controller
{
    public $repository;

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(RoleDataTable $dataTable)
    {
        $users = User::count('userID');
        return $dataTable->render('admin.role.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $accessLevels = AccessLevel::all();
        $privileges = Privileges::all();
        return view('admin.role.create', ['modules' => $this->getModules()], compact('accessLevels', 'privileges'));
    }

    public function getModules()
    {
        return Module::get();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateRoleRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Role $role)
    {
        dd($role);
        $accessLevels = \App\Models\AccessLevel::all();
        $privileges = \App\Models\Privileges::with(['modules','accessLevel'])->get();
        $rolePrivileges = \App\Models\RolePrivilege::where('roleID', $role->roleID)->get()->map(function ($item, $key) {
            return $item->privilegeID;
        })->toArray();
        return view('admin.role.edit', ['role' => $role, 'modules' => $this->getModules()], compact('accessLevels', 'privileges', 'rolePrivileges'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        return $this->repository->update($request->all(), isset($role->roleID) ? $role->roleID : $request->roleID);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request, Role $role)
    {
        return $this->repository->destroy(isset($role->roleID) ? $role->roleID : $request->roleID);
    }
}
