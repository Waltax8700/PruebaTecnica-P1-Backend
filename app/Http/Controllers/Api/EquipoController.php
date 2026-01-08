<?php

namespace App\Http\Controllers\Api;

use App\Models\Equipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:100',
            'tipo' => 'required|string|max:100',
            'cliente' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'fecha_entrega' => 'required|date'
        ]);

        $equipo = Equipo::create($request->all());

        return response()->json([
            'message' => 'Equipo creado correctamente',
            'data' => $equipo
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showAll()
    {
        $equipos = Equipo::all();

        if ($equipos->isEmpty()) {
            return response()->json([
                'message' => 'No hay equipos registrados',
                'data' => []
            ], 200);
        }

        return response()->json([
            'message' => 'Lista de equipos',
            'data' => $equipos
        ], 200);
    }

    public function validate(Request $request)
    {
        $request->validate([
            'codigos' => 'required|array|min:1',
            'codigos.*' => 'string|max:100'
        ]);

        $codigos = $request->input('codigos');

        $equipos = Equipo::whereIn('codigo', $codigos)->get();

        $codigosEncontrados = $equipos->pluck('codigo')->toArray();

        $codigosNoEncontrados = array_values(
            array_diff($codigos, $codigosEncontrados)
        );

        return response()->json([
            'encontrados' => $codigosEncontrados,
            'no_encontrados' => $codigosNoEncontrados
        ], 200);
    }
}
