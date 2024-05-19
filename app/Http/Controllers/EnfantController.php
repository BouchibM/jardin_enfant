<?php

namespace App\Http\Controllers;

use App\Models\Enfant;
use Illuminate\Http\Request;

class EnfantController extends Controller
{
    public function index()
    {
        $enfants = Enfant::all();
        return view('enfant.enfantList', compact('enfants'));
    }
    public function reafect()
    {
        return view('enfant.reafecterEnfant');
    }

}