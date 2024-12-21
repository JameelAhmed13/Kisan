<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DistrictDataTable;
use App\DataTables\UcDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUcRequest;
use App\Http\Requests\UpdateUcRequest;
use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Province;
use App\Models\Tehsil;
use App\Models\Uc;
use App\Repositories\Admin\UcRepository;

class UcController extends Controller
{
    private $repository;

    public function __construct(UcRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(UcDataTable $dataTable)
    {
        $district = District::count('districtID');
        $country = Country::count('countryID');
        $province = Province::count('provinceID');
        $division = Division::count('divisionID');
        $tehsil = Tehsil::count('tehsilID');
        $uc = Uc::count('ucID');
        return $dataTable->render('admin.ucs.index', compact('district', 'country', 'province', 'division', 'tehsil', 'uc'));

    }
    public function create()
    {
        $tehsils = Tehsil::all();
        return view('admin.ucs.create', compact('tehsils'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUcRequest $request)
    {
        return $this->repository->store($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(Uc $uc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Uc $uc)
    {
        return $this->repository->edit($uc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUcRequest $request, Uc $uc)
    {
        return $this->repository->update($request, $uc);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Uc $uc)
    {
        return $this->repository->destroy($uc);

    }
}
