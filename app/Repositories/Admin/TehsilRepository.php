<?php

namespace App\Repositories\Admin;

use App\Models\District;
use App\Models\Tehsil;
use Exception;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class TehsilRepository extends BaseRepository
{
    function model()
    {
        return Tehsil::class;
    }

    public function index()
    {
        return view('admin.tag.index');
    }

    public function create($attribute = [])
    {
        return view('admin.tehsils.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
             Tehsil::create([
                'name' => $request->name,
                'districtID' => $request->districtID,
            ]);

            DB::commit();
            return redirect()->route('admin.tehsil.index')->with('success', __('Tehsil Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($tehsil)
    {
        $districts = District::all();
        $tehsil->load('district');
        return view('admin.tehsils.edit', compact('districts', 'tehsil'));
    }

    public function update($request, $tehsil)
    {
        DB::beginTransaction();
        try {

            $tehsil->update($request->all());
            DB::commit();
            return redirect()->route('admin.tehsil.index')->with('success', 'Tehsil Updated Successfully.');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($district)
    {
        DB::beginTransaction();
        try {
            $district->delete();

            DB::commit();
            return redirect()->back()->with('success', __('District Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
}
