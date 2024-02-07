<?php

namespace App\Http\Controllers;

use App\Models\Software;
use App\Http\Requests\StoreSoftwareRequest;
use App\Http\Requests\UpdateSoftwareRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $softwares = Software::latest()->paginate(10);
        return view('software.index',compact('softwares'))
        ->with('i', (request()->input('page', 1) - 1) * 10); 
    }
    public function pdf($id)
    {
        $image = '/img/logo.png';
        $software = Software::find($id);
        $pdf = Pdf::loadView('software.pdf', compact('software','image'));
        return $pdf->stream();

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
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'software_fecha' => 'required',
            'software_funcionario' => 'required',
            'software_cargo' => 'required',
            'software_bienes' => 'required',
            'software_dependencia' => 'required',
            'software_cargoencargado' => 'required',
            'software_encargado' => 'required',
            'software_equipo' => 'required',
            'software_marca' => ' required',
            'software_serial' => 'required',
            'software_color' => 'required'
        ]);
        Software::create($request->all());

        return redirect()->route('software.index')->with('success','Mantenimiento creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $softwares = Software::find($id);
        return view('software.show',compact('softwares'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $softwares = Software::find($id);
        return view('software.edit',compact('softwares'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        request()->validate([
            'software_fecha' => 'required',
            'software_funcionario' => 'required',
            'software_cargo' => 'required',
            'software_bienes' => 'required',
            'software_dependencia' => 'required',
            'software_cargoencargado' => 'required',
            'software_encargado' => 'required',
            'software_equipo' => 'required',
            'software_marca' => ' required',
            'software_serial' => 'required',
            'software_color' => 'required'
        ]);
        $input = $request->all();
        $softwares = Software::find($id);
        $softwares->update($input);

        return redirect()->route('software.index')->with('success','Mantenimiento actualizado con éxito!');
    }
    /**
     * Show de form to confirm the remove from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id): View
    {
        $softwares = Software::find($id);
        return view('software.delete',compact('softwares'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Software::find($id)->delete();
        return redirect()->route('software.index')->with('success','Mantenimiento eliminado exitosamente');
    }
}
