<?php

namespace App\Http\Controllers;

use App\Models\SoftwareCalendario;
use App\Http\Requests\StoreSoftwareCalendarioRequest;
use App\Http\Requests\UpdateSoftwareCalendarioRequest;
use Carbon\Carbon;


use Illuminate\Http\Request;

class SoftwareCalendarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:softwarecalendario-list|softwarecalendario-create|softwarecalendario-edit|softwarecalendario-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:softwarecalendario-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:softwarecalendario-edit',   ['only' => ['edit', 'update']]);
        $this->middleware('permission:softwarecalendario-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        return view('softwarecalendario.index');
    }

    public function events(Request $request)
    {
        $data = SoftwareCalendario::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->get(['id', 'title', 'descripcion', 'start', 'end']);
        return response()->json($data);
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
            case 'edit':
                if (request()->validate(SoftwareCalendario::$rules)){
                    if ($query=SoftwareCalendario::find($request->id)) {

                        $input = $request->all();
                        $query->update($input);

                        return response()->json([
                            'status' => 'OK',
                            'message' => 'Datos actualizados correctamente.',
                            'cod' => 201
                        ]);

                    } else {
                        return response()->json([
                            'status' => 'Error',
                            'message' => 'Ocurrio un error al actualizar la información.',
                            'cod' => 400
                        ]);
                    }
                }

            case 'delete':
                if ($query=SoftwareCalendario::find($request->id)) {
                    $query->delete();
                    return response()->json([
                        'status' => 'OK',
                        'message' => 'Datos eliminados correctamente.',
                        'cod' => 201
                    ]);
                } else {
                    return response()->json([
                        'status' => 'Error',
                        'message' => 'Ocurrio un error al eliminar la información.',
                        'cod' => 400
                    ]);
                }
            default:
                # ...
                break;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSoftwareCalendarioRequest $request)
    {
        if (request()->validate(SoftwareCalendario::$rules)){
            if (SoftwareCalendario::create($request->all())) {
                return response()->json([
                    'status' => 'OK',
                    'message' => 'Datos agregados correctamente.',
                    'cod' => 201
                ]);
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Ocurrio un error al registrar la información.',
                    'cod' => 400
                ]);
            }
        }
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
