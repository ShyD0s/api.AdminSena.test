<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //crud cursos

    public function index() //obtener todos los cursos
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function show($id) //obtener un curso por id
    {
        $course = Course::find($id);
        return response()->json($course);
    }

    public function store(Request $request) //crear un curso
    {
        $course = Course::create($request->all());
        return response()->json($course);
    }

    public function update(Request $request, $id) //actualizar un curso por id
    {
        $course = Course::find($id);
        $course->update($request->all());
        return response()->json($course);
    }

    public function destroy($id) // eliminar un curso por id
    {
        $course = Course::find($id);
        $course->delete();
        return response()->json($course);
    }
}
