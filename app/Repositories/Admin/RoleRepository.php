<?php

namespace App\Repositories\Admin;

use App\Models\RolePrivilege;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Prettus\Repository\Eloquent\BaseRepository;

class RoleRepository extends BaseRepository
{
    function model()
    {
        return Role::class;
    }

    public function index($roleTable)
    {
        if (request()->action) {
            return redirect()->back();
        }

        return view('admin.role.index', ['tableConfig' => $roleTable]);
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            $role = $this->model->create([
                'roleName' => $request->roleName,
                'description' => $request->description
            ]);
            $role->privileges()->attach($request->privilegeID);

            DB::commit();

            return redirect()->route('admin.role.index')->with('success', 'Role Created Successfully');

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $role = $this->model->findOrFail($id);
            $role->privileges()->detach();
            $role->where('roleID', $id)->update([
                'roleName' => $request['roleName'],
                'description' => $request['description']
            ]);
            $role->privileges()->attach($request['privilegeID']);

            DB::commit();
            return redirect()->route('admin.role.index')->with('success', 'Role Updated Successfully');

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {

            $role = $this->model->findOrFail($id);
            RolePrivilege::where('roleID', $id)->delete();
            $role->destroy($id);
            DB::commit();
            return redirect()->route('admin.role.index')->with('success', 'Role Deleted Successfully');

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }
}
