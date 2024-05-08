<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return View('classe.classeList', compact('classes'));
    }
}