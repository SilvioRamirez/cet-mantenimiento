<?php

namespace App\Http\Controllers;

use App\Models\Software;
use App\Http\Requests\StoreSoftwareRequest;
use App\Http\Requests\UpdateSoftwareRequest;

class SoftwareController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:software-list|software-create|software-edit|software-delete', ['only' => ['index','show']]);
         $this->middleware('permission:software-create', ['only' => ['create','store']]);
         $this->middleware('permission:software-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:software-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $software = Software::latest()->paginate(5);
        return view('software.index',compact('software'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('software.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSoftwareRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Software $software)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Software $software)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoftwareRequest $request, Software $software)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Software $software)
    {
        //
    }
}
