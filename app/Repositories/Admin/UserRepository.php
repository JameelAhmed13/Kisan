<?php

namespace App\Repositories\Admin;

use App\Models\UserRole;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Prettus\Repository\Eloquent\BaseRepository;


class UserRepository extends BaseRepository
{
    protected $role;

    function model()
    {
        $this->role = new Role();
        return User::class;
    }

    public function index($userTable)
    {
        if (request()['action']) {
            return redirect()->back();
        }

        return view('admin.user.index', ['tableConfig' => $userTable]);
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {
            $user = $this->model->create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' => $request->name,
                'status' => $request->status,
            ]);

            if ($request->roleID) {
                $user->roles()->attach($request->roleID);
            }

            DB::commit();

            return redirect()->route('login')->with('success', __('User Created Successfully'));

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

    public function update($request, $userID)
    {
        DB::beginTransaction();

        try {

            $user = $this->model->findOrFail($userID);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
            ]);

            if (isset($request->roleID)) {
                $user->roles()->sync($request->roleID);
            }

            DB::commit();
            return redirect()->route('admin.user.index')->with('success', __('User Updated Successfully'));

        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function status($id, $status)
    {
        try {

            $user = $this->model->findOrFail($id);
            $user->update(['status' => $status]);

            return json_encode(["resp" => $user]);

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function destroy($userID)
    {
        try {

            $user = $this->model->findOrFail($userID);
            UserRole::where('userID', $user->userID)->delete();
            $user->destroy($userID);
            return redirect()->back()->with('success', __('User Deleted Successfully'));

        } catch (Exception $e) {

            throw $e;
        }
    }
}
