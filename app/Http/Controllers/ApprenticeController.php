<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    //crud para aprendices

    public function index() //obtener datos de los aprendices con su informacion relacionada
    {
        $apprentices = Apprentice::with('course', 'computer')->get();
        return response()->json($apprentices);
    }

    public function show($id) //obtener un aprendiz por id
    {
        $apprentice = Apprentice::find($id);
        return response()->json($apprentice);
    }

    public function store(Request $request)//crear un aprendiz
    {
        $apprentice = Apprentice::create($request->all());
        return response()->json($apprentice);
    }

    public function update(Request $request, $id)//actualizar un aprendiz por id
    {
        $apprentice = Apprentice::find($id);
        $apprentice->update($request->all());
        return response()->json($apprentice);
    }

    public function destroy($id)// eliminar un aprendiz por id
    {
        $apprentice = Apprentice::find($id);
        $apprentice->delete();
        return response()->json($apprentice);
    }
    
}
