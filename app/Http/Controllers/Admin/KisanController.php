<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\KisanDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKisanRequest;
use App\Http\Requests\UpdateKisanRequest;
use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Kisan;
use App\Models\Province;
use App\Models\Tehsil;
use App\Models\Uc;
use Illuminate\Http\Request;

class KisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(KisanDatatable $dataTable)
    {
        return $dataTable->render('admin.kisan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $provinces = Province::all();
        $divisions = Division::all();
        $districts = District::all();
        $tehsils = Tehsil::all();
        $ucs = Uc::all();
        return view('admin.kisan.create', compact('countries', 'provinces', 'divisions', 'districts', 'tehsils', 'ucs', 'countries'));
    }

    public function form(){
        return view('admin.kisan.form');
    }

    public function checkingCnic(Request $request){
        $kissanCnic = Kisan::where('cnic', $request->cnic)->get();
        if (!$kissanCnic->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Cnic already exists.",
                "data" => $kissanCnic,
            ]);
        }
        else {
            return response()->json([
                "success" => false,
                "message" => "Cnic number not Registered"
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKisanRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kisan $kisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kisan $kisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKisanRequest $request, Kisan $kisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kisan $kisan)
    {
        //
    }
}
