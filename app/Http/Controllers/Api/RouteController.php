<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusRoute;

class RouteController extends Controller
{
    public function index()
    {
        return BusRoute::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'punto_inicio' => 'required|string',
            'punto_fin' => 'required|string',
            'distancia_km' => 'required|numeric',
            'tiempo_estimado' => 'required'
        ]);

        $route = BusRoute::create($data);
        return response()->json($route, 201);
    }

    public function show($id)
    {
        return BusRoute::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $route = BusRoute::findOrFail($id);

        $data = $request->validate([
            'nombre' => 'sometimes|string',
            'punto_inicio' => 'sometimes|string',
            'punto_fin' => 'sometimes|string',
            'distancia_km' => 'sometimes|numeric',
            'tiempo_estimado' => 'sometimes'
        ]);

        $route->update($data);
        return response()->json($route);
    }

    public function destroy($id)
    {
        $route = BusRoute::findOrFail($id);
        $route->delete();

        return response()->json(['message' => 'Ruta eliminada']);
    }
}
