<?php

namespace App\Repositories\Admin;

use App\Models\District;
use App\Models\Division;
use App\Models\Tehsil;
use Exception;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class DistrictRepository extends BaseRepository
{
    protected $division;

    function model()
    {
        $this->division = new Division();
        return District::class;
    }

    public function index()
    {
        return view('admin.districts.index');
    }

    public function create($attribute = [])
    {
        return view('admin.districts.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            District::create([
                'name' => $request->name,
                'divisionID' => $request->divisionID,
            ]);

            DB::commit();
            return redirect()->route('admin.district.index')->with('success', __('District Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($district)
    {
        $divisions = Division::all();
        $district->load('division');
        return view('admin.districts.edit', compact('divisions', 'district'));
    }

    public function update($request, $district)
    {
        DB::beginTransaction();
        try {

            District::where('districtID', $district->districtID)->update([
                'name' => $request['name'],
                'divisionID' => $request['divisionID'],
            ]);

            DB::commit();
            return redirect()->route('admin.district.index')->with('success', 'District Updated Successfully.');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($district)
    {
        DB::beginTransaction();
        try {
            Tehsil::where('districtID', $district->districtID)->delete();
            $district->destroy($district->districtID);

            DB::commit();
            return redirect()->back()->with('success', __('District Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

}
