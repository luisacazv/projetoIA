<?php

namespace App\Http\Controllers;

use App\Models\Teacher; // Certifique-se de que o modelo está importado corretamente
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $teachers = Teacher::all();
    return view('teachers.index', compact('teachers'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('teachers.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:teachers'
    ]);

    Teacher::create($request->all());
    return redirect()->route('teachers.index')->with('success', 'Professor criado com sucesso');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
{
    return view('teachers.edit', compact('teacher'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:teachers,email,' . $teacher->id,
    ]);

    $teacher->update($request->all());
    return redirect()->route('teachers.index')->with('success', 'Professor atualizado com sucesso');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
{
    $teacher->delete();
    return redirect()->route('teachers.index')->with('success', 'Professor deletado com sucesso');
}

}
