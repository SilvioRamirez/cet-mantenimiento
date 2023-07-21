<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Http\Requests\StoreEquiposRequest;
use App\Http\Requests\UpdateEquiposRequest;

class EquiposController extends Controller
{
          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:equipos-list|equipos-create|equipos-edit|equipos-delete', ['only' => ['index','show']]);
         $this->middleware('permission:equipos-create', ['only' => ['create','store']]);
         $this->middleware('permission:equipos-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:equipos-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipos::latest()->paginate(5);
        return view('equipos.index',compact('equipos'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEquiposRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipos $equipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEquiposRequest $request, Equipos $equipos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipos $equipos)
    {
        //
    }
}
