<?php

use Illuminate\Support\Facades\Route;
use App\Models\Region;
use App\Models\Jardin;
use App\Models\Classe;
use App\Models\Section;
use App\Models\Structure;
use App\Models\Parents;
use App\Models\Enfant;
use App\Models\Fonction;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\JardinController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\FonctionController;

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
Route::get('/regions/{id}/edit', [RegionController::class, 'edit'])->name('region.edit');
Route::put('/regions/{id}', [RegionController::class, 'update'])->name('region.update');
Route::delete('/regions/{id}', [RegionController::class, 'destroy'])->name('region.destroy');


Route::get('/jardinList', [JardinController::class, 'index'])->name('jardin.index');
Route::get('/ajouterJardin', [JardinController::class, 'view_ajt'])->name('jardin.view');
Route::post('/creatJardin', [JardinController::class, 'create'])->name('jardin.create');
Route::get('/jardins/{id}/edit', [JardinController::class, 'edit'])->name('jardin.edit');
Route::put('/jardins/{id}', [JardinController::class, 'update'])->name('jardin.update');
Route::delete('/jardins/{id}', [JardinController::class, 'destroy'])->name('jardin.destroy');

Route::get('/sectionList', [SectionController::class, 'index'])->name('section.index');
Route::get('/ajoutersection', [SectionController::class, 'view_ajt'])->name('section.view');  
Route::post('/creatsection', [SectionController::class, 'create'])->name('section.create');
Route::get('/sections/{id}/edit', [SectionController::class, 'edit'])->name('section.edit');
Route::put('/sections/{id}', [SectionController::class, 'update'])->name('section.update');
Route::delete('/sections/{id}', [SectionController::class, 'destroy'])->name('section.destroy');


Route::get('/classeList', [ClasseController::class, 'index'])->name('classe.index');
Route::get('/ajouterClasse', [ClasseController::class, 'view_ajt'])->name('classe.view');
Route::post('/creatClasse', [ClasseController::class, 'create'])->name('classe.create');
Route::get('/classes/{id}/edit', [ClasseController::class, 'edit'])->name('classe.edit');
Route::put('/classes/{id}', [ClasseController::class, 'update'])->name('classe.update');
Route::delete('/classes/{id}', [ClasseController::class, 'destroy'])->name('classe.destroy');

Route::get('/structureList', [StructureController::class, 'index'])->name('structure.index');
Route::get('/ajouterStructure', [StructureController::class, 'view_ajt'])->name('structure.view');
Route::post('/creatStructure', [StructureController::class, 'create'])->name('structure.create');
Route::get('/structures/{code}/edit', [StructureController::class, 'edit'])->name('structure.edit');
Route::put('/structures/{code}', [StructureController::class, 'update'])->name('structure.update');
Route::delete('/structures/{code}', [StructureController::class, 'destroy'])->name('structure.destroy');

Route::get('/fonctionList', [FonctionController::class, 'index'])->name('fonction.index');
Route::get('/ajouterFonction', [FonctionController::class, 'view_ajt'])->name('fonction.view');
Route::post('/creatFonction', [FonctionController::class, 'create'])->name('fonction.create');
Route::get('/fonctions/{code}/edit', [FonctionController::class, 'edit'])->name('fonction.edit');
Route::put('/fonctions/{code}', [FonctionController::class, 'update'])->name('fonction.update');
Route::delete('/fonctions/{code}', [FonctionController::class, 'destroy'])->name('fonction.destroy');
  


?>