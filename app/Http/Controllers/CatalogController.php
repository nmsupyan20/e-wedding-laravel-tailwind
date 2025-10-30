<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatalogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateCatalogRequest;
use App\Models\Catalog;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::where('user_id', Auth::id())->latest()->paginate(12);

        return view('dashboard.catalogs.index', [
            'titlePage' => 'Catalogs Management',
            'catalogs' => $catalogs,
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
        $data['user_id'] = Auth::user()->id;

        // handle header image upload
        if ($request->hasFile('header')) {
            $path = $request->file('header')->store('catalog_headers', 'public');
            $data['header'] = $path;
        }

        Catalog::create($data);

        return redirect()->route('catalogs.index')->with('success', 'Catalog created successfully.');
    }

    public function edit(Catalog $catalog)
    {
        // authorization: only owner
        if ($catalog->user_id !== Auth::id()) {
            abort(403);
        }

        return view('dashboard.catalogs.edit', [
            'titlePage' => 'Edit Catalog',
            'catalog' => $catalog,
        ]);
    }

    public function update(UpdateCatalogRequest $request, Catalog $catalog)
    {
        if ($catalog->user_id !== Auth::id()) {
            abort(403);
        }

        $data = $request->validated();

        if ($request->hasFile('header')) {
            // delete old file if exists
            if ($catalog->header && Storage::disk('public')->exists($catalog->header)) {
                Storage::disk('public')->delete($catalog->header);
            }
            $data['header'] = $request->file('header')->store('catalog_headers', 'public');
        }

        $catalog->update($data);

        return redirect()->route('catalogs.index')->with('success', 'Catalog updated successfully.');
    }

    public function destroy(Catalog $catalog)
    {
        if ($catalog->user_id !== Auth::id()) {
            abort(403);
        }

        // delete header image
        if ($catalog->header && Storage::disk('public')->exists($catalog->header)) {
            Storage::disk('public')->delete($catalog->header);
        }

        $catalog->delete();

        return redirect()->route('catalogs.index')->with('success', 'Catalog deleted successfully.');
    }
}
