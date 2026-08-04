<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //crud centros de formacion

    public function index() //obtener todos los centros de formacion
    {
        $trainingCenters = Training_center::all();
        return response()->json($trainingCenters);
    }

    public function show($id) //obtener un centro de formacion por id
    {
        $trainingCenter = Training_center::find($id);
        return response()->json($trainingCenter);
    }

    public function store(Request $request) //crear un centro de formacion
    {
        $trainingCenter = Training_center::create($request->all());
        return response()->json($trainingCenter);
    }

    public function update(Request $request, $id) //actualizar un centro de formacion por id
    {
        $trainingCenter = Training_center::find($id);
        $trainingCenter->update($request->all());
        return response()->json($trainingCenter);
    }

    public function destroy($id) // eliminar un centro de formacion por id
    {
        $trainingCenter = Training_center::find($id);
        $trainingCenter->delete();
        return response()->json($trainingCenter);
    }
    
}
