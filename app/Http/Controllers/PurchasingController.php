<?php

namespace App\Http\Controllers;

use App\Models\Purchasing;
use Illuminate\Http\Request;

class PurchasingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchasing::with(['user', 'catalog'])->latest()->paginate(10);
        
        return view('dashboard.purchasings.index', [
            'titlePage' => 'Purchasing Management',
            'purchases' => $purchases
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchasing $purchasing)
    {
        return view('dashboard.purchasings.edit', [
            'titlePage' => 'Update Purchase Status',
            'purchasing' => $purchasing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchasing $purchasing)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:processed,accepted,reject']
        ]);

        $purchasing->update($validated);

        return redirect()->route('purchasings.index')->with('success', 'Purchase status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort(404);
    }
}
