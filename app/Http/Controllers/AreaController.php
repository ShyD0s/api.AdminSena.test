<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //crud areas

    public function index() //obtener todas las areas
    {
        $areas = Area::all();
        return response()->json($areas);
    }

    public function show($id) //obtener un area por id
    {
        $area = Area::find($id);
        return response()->json($area);
    }

    public function store(Request $request) //crear un area
    {
        $area = Area::create($request->all());
        return response()->json($area);
    }

    public function update(Request $request, $id) //actualizar un area por id
    {
        $area = Area::find($id);
        $area->update($request->all());
        return response()->json($area);
    }

    public function destroy($id) // eliminar un area por id
    {
        $area = Area::find($id);
        $area->delete();
        return response()->json($area);
    }
}
