<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BienesNacionale;

class BienesController extends Controller
{
    function __construct(){
        $this->Middleware('permission:ver-bien | editar-bien | crear-bien | borrar-bien', ['only'=>['index']]);
        $this->Middleware('permission:crear-bien', ['only'=>['create','store']]);
        $this->Middleware('permission:editar-bien', ['only'=>['edit','update']]);
        $this->Middleware('permission:borrar-bien', ['only'=>['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bienes = BienesNacionale::paginate(5);
        return view('bienes.index', compact('bienes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bienes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'descripcion' => 'required',
            'color' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serial' => 'required',
            'numero_oficina' => 'required',
            'numero_bien' => 'required',
            'codigo' => 'required',
            'id_coordinacion' => 'required',
        ]);
        BienesNacionale::create($request->all());
        return redirect()->route('bienes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BienesNacionale $bien)
    {
        return view('bienes.editar', compact('bien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BienesNacionale $bien)
    {
        request()->validate([
            'descripcion' => 'required',
            'color' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serial' => 'required',
            'numero_oficina' => 'required',
            'numero_bien' => 'required',
            'codigo' => 'required',
            'id_coordinacion' => 'required',
        ]);
        $bien->update($request->all());
        return redirect()->route('bienes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BienesNacionale $bien)
    {
        $bien->delete();
        return redirect()->route('bienes.index');
    }
}
