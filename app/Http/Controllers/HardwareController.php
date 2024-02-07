<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use App\Http\Requests\StoreHardwareRequest;
use App\Http\Requests\UpdateHardwareRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

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
       
        $hardwares = Hardware::latest()->paginate(10);
        return view('hardware.index',compact('hardwares'))
        ->with('i', (request()->input('page', 1) - 1) * 10); 
    }
    public function pdf($id)
    {
        $image = '/img/logo.png';
        $hardware = Hardware::find($id);
        $pdf = Pdf::loadView('hardware.pdf', compact('hardware','image'));
        return $pdf->stream();

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
					'hardware_fecha'=> 'required',
					'hardware_funcionario'=> 'required',
					'hardware_cargo'=> 'required',
					'hardware_bienes'=> 'required',
					'hardware_dependencia'=> 'required',
					'hardware_encargado'=> 'required',
                    'hardware_cargoencargado'=> 'required',
					'hardware_equipo'=> 'required',
					'hardware_marca'=> 'required',
					'hardware_serial'=> 'required',
					'hardware_color'=> 'required'
        ]);
    
        Hardware::create($request->all());
    
        return redirect()->route('hardware.index')->with('success','Mantenimiento de Hardware creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
			$hardware = Hardware::find($id);
			return view('hardware.show',compact('hardware'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $hardware = Hardware::find($id);
        return view('hardware.edit',compact('hardware'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
			request()->validate([
				'hardware_fecha' => 'required',
				'hardware_funcionario' => 'required',
				'hardware_cargo' => 'required',
				'hardware_bienes' => 'required',
				'hardware_dependencia' => 'required',
				'hardware_encargado' => 'required',
                'hardware_cargoencargado' => 'required',
				'hardware_equipo' => 'required',
				'hardware_marca' => ' required',
				'hardware_serial' => 'required',
				'hardware_color' => 'required'
		]);
		$input = $request->all();
		$hardware = Hardware::find($id);
		$hardware->update($input);

		return redirect()->route('hardware.index')->with('success','Mantenimiento actualizado con éxito!');
    }

    /**
     * Show de form to confirm the remove from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id): View
    {
        $hardwares = Hardware::find($id);
        return view('hardware.delete',compact('hardwares'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Hardware::find($id)->delete();
        return redirect()->route('hardware.index')->with('success','Mantenimiento eliminado exitosamente');
    }
}
