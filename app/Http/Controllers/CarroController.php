<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Carro::paginate($request->has('per_page') ? $request->get('per_page') : 15);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarroRequest $request)
    {
        return Carro::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {
        return Carro::findOrFail($carro->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarroRequest $request, int $id)
    {
        return Carro::findOrFail($id)->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return Carro::findOrFail($id)->delete();
    }
}
