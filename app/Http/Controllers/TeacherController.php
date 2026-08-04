<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //crud docentes

    public function index() //obtener todos los docentes con su informacion relacionada
    {
        $teachers = Teacher::with('area', 'trainingCenter', 'courses')->get();
        return response()->json($teachers);
    }

    public function show($id) //obtener un docente por id
    {
        $teacher = Teacher::find($id);
        return response()->json($teacher);
    }

    public function store(Request $request) //crear un docente
    {
        $teacher = Teacher::create($request->all());
        return response()->json($teacher);
    }

    public function update(Request $request, $id) //actualizar un docente por id
    {
        $teacher = Teacher::find($id);
        $teacher->update($request->all());
        return response()->json($teacher);
    }

    public function destroy($id) // eliminar un docente por id
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return response()->json($teacher);
    }
    
}
