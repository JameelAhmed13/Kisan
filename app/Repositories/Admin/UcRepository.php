<?php

namespace App\Repositories\Admin;

use App\Models\Tehsil;
use App\Models\Uc;
use Exception;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class UcRepository extends BaseRepository
{
    function model()
    {
        return Uc::class;
    }

    public function index()
    {
        return view('admin.ucs.index');
    }

    public function create($attribute = [])
    {
        return view('admin.ucs.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            Uc::create([
                'name' => $request->name,
                'tehsilID' => $request->tehsilID,
            ]);

            DB::commit();
            return redirect()->route('admin.uc.index')->with('success', __('Uc Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($uc)
    {
        $tehsils = Tehsil::all();
        $uc->load('tehsil');
        return view('admin.ucs.edit',compact('tehsils','uc'));
    }

    public function update($request, $uc)
    {
        DB::beginTransaction();
        try {
            $uc->update($request->all());
            DB::commit();
            return redirect()->route('admin.uc.index')->with('success', 'Uc Updated Successfully.');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($uc)
    {
        DB::beginTransaction();
        try {
            $uc->delete();
            DB::commit();
            return redirect()->back()->with('success', __('Uc Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
}
