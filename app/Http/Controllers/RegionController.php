<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function index()
    {
        $regions = Region::all();
        return view('region.regionList', compact('regions'));
// dans update j'ajoute status
    }
//     public function create(Request $request)
//     {
//        $request->validate([
//             'Nom'=>['required', 'regex:/^[a-zA-Z\s\-]+$/', 'unique:region'], 
//             'Emplacement'=>'required', 
           
//         ]);
     
            

//             $regions= Region::create([
//             'Nom'=>$request->Nom, 
//             'Emplacement'=>$request->Emplacement,  
//             ]);

//             // $employe->postes()->attach($request->id_post, ['date_deb'=>$request->date_deb]);
        
//            // $employe->admin()->attach($request->session()->get('id'));
//             return redirect()->route('region.index')->with('status', 'region ajouté avec succès');
// //   ajouter ou par
//     }
}