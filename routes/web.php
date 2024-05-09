<?php

use Illuminate\Support\Facades\Route;
use App\Models\Region;
use App\Models\Jardin;
use App\Models\Classe;
use App\Models\Section;
use App\Models\Structure;
use App\Models\Parents;
use App\Models\Enfant;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\JardinController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\EnfantController;

Route::get('/admin', function () {
    return view('admin.utilisateur');
});

Route::get('/employee', function () {
    return view('employeeList');
})->name('employee');

Route::get('/parentList', [ParentsController::class, 'index'])->name('parent.index');


Route::get('/enfantList', [EnfantController::class, 'index'])->name('enfant.index');



Route::get('/regionList', [RegionController::class, 'index'])->name('region.index');
Route::get('/ajouterRegion', [RegionController::class, 'view_ajt'])->name('region.view');
Route::post('/creatRegion', [RegionController::class, 'create'])->name('region.create');


Route::get('/jardinList', [JardinController::class, 'index'])->name('jardin.index');

Route::get('/sectionList', [SectionController::class, 'index'])->name('section.index');


Route::get('/classeList', [ClasseController::class, 'index'])->name('classe.index');

Route::get('/structureList', [StructureController::class, 'index'])->name('structure.index');


?>