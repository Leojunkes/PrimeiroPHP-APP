<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function show($project)
    {
        // Renderizar a view que contém o componente Livewire
        return view('projects.show', compact('project'));
    }
}
