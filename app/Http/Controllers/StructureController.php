<?php

namespace App\Http\Controllers;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    
       public function index()
        {
    $structures = Structure::all();
    return view('structure.structureList', compact('structures'));
        }   
}