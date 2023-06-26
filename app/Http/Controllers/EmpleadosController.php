<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Http\Requests\StoreEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class EmpleadosController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:empleado-list|empleado-create|empleado-edit|empleado-delete', ['only' => ['index','show']]);
         $this->middleware('permission:empleado-create', ['only' => ['create','store']]);
         $this->middleware('permission:empleado-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:empleado-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleados::latest()->paginate(5);
        return view('empleados.index',compact('empleados'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpleadosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpleadosRequest $request, Empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleados $empleados)
    {
        //
    }
}
