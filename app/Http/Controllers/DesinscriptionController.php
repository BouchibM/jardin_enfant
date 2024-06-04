<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesinscriptionController extends Controller

{
    public function index()
    {
        return view('utilisateurParent.desinscription.desinscriptionList');
    }

    public function view_ajt()
    {
        return view('utilisateurParent.desinscription.ajouterDesinscription');
    }
/*
    public function create()
    {
        return view('desinscription.index');
    }*/
}

