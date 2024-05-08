<?php

namespace App\Http\Controllers;
use App\Models\Jardin;
use Illuminate\Http\Request;

class JardinController extends Controller
{
    public function index()
    {
        $jardins=jardin::all();
        return view('jardin.jardinList', compact('jardins'));}
}