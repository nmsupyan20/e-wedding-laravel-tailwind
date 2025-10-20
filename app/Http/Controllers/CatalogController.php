<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatalogRequest;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('dashboard.catalogs.index', [
            'titlePage' => 'Catalogs Management',
        ]);
    }

    public function create()
    {
        return view('dashboard.catalogs.create', [
            'titlePage' => 'Create New Catalog',
        ]);
    }

    public function store(StoreCatalogRequest $request)
    {
        $data = $request->validated();
    }
}
