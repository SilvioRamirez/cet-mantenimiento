<?php

namespace App\Http\Controllers;

use App\Models\InformesTecnicos;
use App\Http\Requests\StoreInformesTecnicosRequest;
use App\Http\Requests\UpdateInformesTecnicosRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class InformesTecnicosController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:informe-list|informe-create|informe-edit|informe-delete', ['only' => ['index','show']]);
         $this->middleware('permission:informe-create', ['only' => ['create','store']]);
         $this->middleware('permission:informe-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:informe-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informes = InformesTecnicos::latest()->paginate(5);
        return view('informe.index',compact('informes'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
					'informe_codigo' => 'required',
					'informe_fecha' => 'required',
                    'informe_funcionario' => 'required',
                    'informe_cargofuncionario' => 'required',
					'informe_dependencia' => 'required',
					'informe_responsable' => 'required',
					'informe_cargo' => 'required',
					'informe_bienes' => 'required',
					'informe_equipo' => 'required',
                    'informe_marca' => 'required',
                    'informe_color' => 'required',
                    'informe_serial' => 'required',
                    'informe_caracteristicas' => 'required',
                    'informe_falla' => 'required',
                    'informe_diagnostico' => 'required',
                    'informe_trabajo_realizado' => 'required',
                    'informe_observaciones' => 'required',
                    'informe_recomendaciones' => 'required',
        ]);
    
        InformesTecnicos::create($request->all());
    
        return redirect()->route('informe.index')->with('success','Informe Técnico creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $informes = InformesTecnicos::find($id);
        return view('informe.show',compact('informes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $informes = InformesTecnicos::find($id);
        return view('informe.edit',compact('informes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'informe_codigo' => 'required',
			'informe_fecha' => 'required',
            'informe_funcionario' => 'required',
            'informe_cargofuncionario' => 'required',
			'informe_dependencia' => 'required',
			'informe_responsable' => 'required',
			'informe_cargo' => 'required',
			'informe_bienes' => 'required',
			'informe_equipo' => 'required',
            'informe_marca' => 'required',
            'informe_color' => 'required',
            'informe_serial' => 'required',
            'informe_caracteristicas' => 'required',
            'informe_falla' => 'required',
            'informe_diagnostico' => 'required',
            'informe_trabajo_realizado' => 'required',
            'informe_observaciones' => 'required',
            'informe_recomendaciones' => 'required'
            
        ]);
    
        $input = $request->all();
        $informes = InformesTecnicos::find($id);
        $informes->update($input);

        return redirect()->route('informe.index')->with('success','Informe Técnico actualizado con éxito!');
    }
      /**
     * Show de form to confirm the remove from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id): View
    {
        $informes = InformesTecnicos::find($id);
        return view('informe.delete',compact('informes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        InformesTecnicos::find($id)->delete();
        return redirect()->route('informe.index')->with('success','Dependencia eliminada exitosamente');
       
    }
}
