<?php

namespace App\Http\Controllers;

use App\Models\HardwareCalendario;
use App\Http\Requests\StoreHardwareCalendarioRequest;
use App\Http\Requests\UpdateHardwareCalendarioRequest;

class HardwareCalendarioController extends Controller
{

         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:hardwarecalendario-list|hardwarecalendario-create|hardwarecalendario-edit|hardwarecalendario-delete', ['only' => ['index','show']]);
         $this->middleware('permission:hardwarecalendario-create', ['only' => ['create','store']]);
         $this->middleware('permission:hardwarecalendario-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:hardwarecalendario-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hardwarecalendario = HardwareCalendario::latest()->paginate(5);
        return view('hardwarecalendario.index',compact('hardwarecalendario'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHardwareCalendarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HardwareCalendario $hardwareCalendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HardwareCalendario $hardwareCalendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHardwareCalendarioRequest $request, HardwareCalendario $hardwareCalendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HardwareCalendario $hardwareCalendario)
    {
        //
    }
}
