<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DistrictDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Province;
use App\Models\Tehsil;
use App\Models\Uc;
use App\Repositories\Admin\DistrictRepository;

class DistrictController extends Controller
{
    private $repository;

    public function __construct(DistrictRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(DistrictDataTable $dataTable)
    {

        $district = District::count('districtID');
        $country = Country::count('countryID');
        $province = Province::count('provinceID');
        $division = Division::count('divisionID');
        $tehsil = Tehsil::count('tehsilID');
        $uc = Uc::count('ucID');
        return $dataTable->render('admin.districts.index', compact('district', 'country', 'province', 'division', 'tehsil', 'uc'));

    }

    public function create()
    {

        $divisions = Division::all();
        return view('admin.districts.create', compact('divisions'));
    }


    public function store(StoreDistrictRequest $request)
    {
        return $this->repository->store($request);
    }


    public function show(District $district)
    {
        dd($district);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        return $this->repository->edit($district);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictRequest $request, District $district)
    {
        return $this->repository->update($request, $district);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        return $this->repository->destroy($district);

    }
}
