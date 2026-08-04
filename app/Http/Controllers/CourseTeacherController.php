<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
    //crud curso-docente

    public function index() //obtener todos los cursos-docente
    {
        $courseTeachers = Course_Teacher::all();
        return response()->json($courseTeachers);
    }

    public function show($id) //obtener un curso-docente por id
    {
        $courseTeacher = Course_Teacher::find($id);
        return response()->json($courseTeacher);
    }

    public function store(Request $request) //crear un curso-docente
    {
        $courseTeacher = Course_Teacher::create($request->all());
        return response()->json($courseTeacher);
    }

    public function update(Request $request, $id) //actualizar un curso-docente por id
    {
        $courseTeacher = Course_Teacher::find($id);
        $courseTeacher->update($request->all());
        return response()->json($courseTeacher);
    }

    public function destroy($id) // eliminar un curso-docente por id
    {
        $courseTeacher = Course_Teacher::find($id);
        $courseTeacher->delete();
        return response()->json($courseTeacher);
    }
    
}
