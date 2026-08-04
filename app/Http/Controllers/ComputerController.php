<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    //crud computadores

    public function index() //obtener todos los computadores
    {
        $computers = Computer::all();
        return response()->json($computers);
    }

    public function show($id) //obtener un computador por id
    {
        $computer = Computer::find($id);
        return response()->json($computer);
    }

    public function store(Request $request) //crear un computador
    {
        $computer = Computer::create($request->all());
        return response()->json($computer);
    }

    public function update(Request $request, $id) //actualizar un computador por id
    {
        $computer = Computer::find($id);
        $computer->update($request->all());
        return response()->json($computer);
    }

    public function destroy($id) // eliminar un computador por id
    {
        $computer = Computer::find($id);
        $computer->delete();
        return response()->json($computer);
    }
}
