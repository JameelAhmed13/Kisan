<?php

namespace App\Repositories\Admin;

use App\Http\Controllers\Controller;

class KisanRepository extends Controller
{
    public function index($kisanTable)
    {
        if (request()['action']) {
            return redirect()->back();
        }

        return view('admin.kisan.index', ['tableConfig' => $kisanTable]);
    }
}
