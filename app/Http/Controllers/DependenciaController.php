<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use App\Http\Requests\StoreDependenciaRequest;
use App\Http\Requests\UpdateDependenciaRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class DependenciaController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:depen-list|depen-create|depen-edit|depen-delete', ['only' => ['index','show']]);
         $this->middleware('permission:depen-create', ['only' => ['create','store']]);
         $this->middleware('permission:depen-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:depen-delete', ['only' => ['destroy']]);
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $dependencias = Dependencia::latest()->paginate(5);
        return view('dependencia.index',compact('dependencias'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dependencia.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
					'depen_nombre' => 'required',
					'depen_num_interno' => 'required',
					'depen_nivel' => 'required',
					'depen_piso' => 'required',
					'depen_abreviacion' => 'required',
					'depen_empleado' => 'required',
					'depen_status' => 'required',
        ]);
    
        Dependencia::create($request->all());
    
        return redirect()->route('dependencia.index')->with('success','Dependencia creada con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $dependencia = Dependencia::find($id);
        return view('dependencia.show',compact('dependencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $dependencia = Dependencia::find($id);
        return view('dependencia.edit',compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'depen_nombre' => 'required',
            'depen_num_interno' => 'required',
			'depen_nivel' => 'required',
			'depen_piso' => 'required',
			'depen_abreviacion' => 'required',
			'depen_empleado' => 'required'
            
        ]);
    
        $input = $request->all();
        $dependencia = Dependencia::find($id);
        $dependencia->update($input);

        return redirect()->route('dependencia.index')->with('success','Dependencia actualizada con éxito!');
    }
    /**
     * Show de form to confirm the remove from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id): View
    {
        $dependencia = Dependencia::find($id);
        return view('dependencia.delete',compact('dependencia'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        if ($id != 1){
            Dependencia::find($id)->delete();
            return redirect()->route('dependencia.index')->with('success','Dependencia eliminada exitosamente');
        }else{
            return redirect()->route('dependencia.index')->with('error','Ha ocurrido un error.');
        }
    }
}
