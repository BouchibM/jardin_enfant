<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
  public function index()
  {
    $parents = Parents::all();
    return view('parent.parentList', compact('parents'));
  }

  
}