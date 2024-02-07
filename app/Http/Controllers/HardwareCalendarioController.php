<?php

namespace App\Http\Controllers;

use App\Models\HardwareCalendario;
use App\Http\Requests\StoreHardwareCalendarioRequest;
use App\Http\Requests\UpdateHardwareCalendarioRequest;
use Carbon\Carbon;

use Illuminate\Http\Request;

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
        return view('hardwarecalendario.index');
    }
    public function events(Request $request)
    {
        $data = HardwareCalendario::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->get(['id', 'title', 'descripcion', 'start', 'end']);
        return response()->json($data);
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
            case 'edit':
                if (request()->validate(HardwareCalendario::$rules)){
                    if ($query=HardwareCalendario::find($request->id)) {

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
                
                if ($query=HardwareCalendario::find($request->id)) {
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
    public function store(StoreHardwareCalendarioRequest $request)
    {
        if (request()->validate(HardwareCalendario::$rules)){
            if (HardwareCalendario::create($request->all())) {
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
}
