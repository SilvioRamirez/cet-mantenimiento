<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use App\Http\Requests\StoreHardwareRequest;
use App\Http\Requests\UpdateHardwareRequest;

class HardwareController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:hardware-list|hardware-create|hardware-edit|hardware-delete', ['only' => ['index','show']]);
         $this->middleware('permission:hardware-create', ['only' => ['create','store']]);
         $this->middleware('permission:hardware-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:hardware-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hardware = Hardware::latest()->paginate(5);
        return view('hardware.index',compact('hardware'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hardware.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
					
        ]);
    
        Hardware::create($request->all());
    
        return redirect()->route('hardware.index')->with('success','Mantenimiento de Hardware creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hardware $hardware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hardware $hardware)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHardwareRequest $request, Hardware $hardware)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hardware $hardware)
    {
        //
    }
}
