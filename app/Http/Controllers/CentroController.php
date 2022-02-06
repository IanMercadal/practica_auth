<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function index(Request $request)
    {
        $centros = Centro::all();
        return view('centros.index', compact('centros'));
        // return view(RouteServiceProvider::HOME);
    }
}
