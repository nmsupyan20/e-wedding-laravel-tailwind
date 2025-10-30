<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class LandingController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::latest()->take(3)->get();
        
        return view('landing.app', [
            'catalogs' => $catalogs
        ]);
    }

    public function show($id)
    {
        $catalog = Catalog::find($id);

        return view('landing.show', [
            'catalog' => $catalog
        ]);
    }
}
