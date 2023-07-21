<?php

namespace App\Http\Controllers;
use App\Models\SoftwareCalendario;
use App\Http\Requests\StoreSoftwareCalendarioRequest;
use App\Http\Requests\UpdateSoftwareCalendarioRequest;

class SoftwareCalendarioController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:softwarecalendario-list|softwarecalendario-create|softwarecalendario-edit|softwarecalendario-delete', ['only' => ['index','show']]);
         $this->middleware('permission:softwarecalendario-create', ['only' => ['create','store']]);
         $this->middleware('permission:softwarecalendario-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:softwarecalendario-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$softwarecalendario = SoftwareCalendario::latest()->paginate(5);
        return view('softwarecalendario.index');
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
    public function store(StoreSoftwareCalendarioRequest $request)
    {
        //
        request()->validate(SoftwareCalendario::$rules);
        $evento=SoftwareCalendario::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(SoftwareCalendario $softwareCalendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoftwareCalendario $softwareCalendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoftwareCalendarioRequest $request, SoftwareCalendario $softwareCalendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoftwareCalendario $softwareCalendario)
    {
        //
    }
}
