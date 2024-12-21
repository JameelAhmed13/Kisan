<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TehsilDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTehsilRequest;
use App\Http\Requests\UpdateTehsilRequest;
use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Province;
use App\Models\Tehsil;
use App\Models\Uc;
use App\Repositories\Admin\TehsilRepository;

class TehsilController extends Controller
{
    private $repository;

    public function __construct(TehsilRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(TehsilDataTable $dataTable)
    {
        $district = District::count('districtID');
        $country = Country::count('countryID');
        $province = Province::count('provinceID');
        $division = Division::count('divisionID');
        $tehsil = Tehsil::count('tehsilID');
        $uc = Uc::count('ucID');
        return $dataTable->render('admin.tehsils.index', compact('district', 'country', 'province', 'division', 'tehsil', 'uc'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $districts = District::all();
        return view('admin.tehsils.create', compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTehsilRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tehsil $tehsil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tehsil $tehsil)
    {
        return $this->repository->edit($tehsil);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTehsilRequest $request, Tehsil $tehsil)
    {
        return $this->repository->update($request, $tehsil);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tehsil $tehsil)
    {
        return $this->repository->destroy($tehsil);

    }
}
