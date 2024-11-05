<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index()
    {
        $disciplines = Discipline::all();
        return view('disciplines.index', compact('disciplines'));
    }

    public function create()
    {
        return view('disciplines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Discipline::create($request->all());
        return redirect()->route('disciplines.index')->with('success', 'Disciplina criada com sucesso');
    }

    public function edit(Discipline $discipline)
    {
        return view('disciplines.edit', compact('discipline'));
    }

    public function update(Request $request, Discipline $discipline)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $discipline->update($request->all());
        return redirect()->route('disciplines.index')->with('success', 'Disciplina atualizada com sucesso');
    }

    public function destroy(Discipline $discipline)
    {
        $discipline->delete();
        return redirect()->route('disciplines.index')->with('success', 'Disciplina deletada com sucesso');
    }
}
