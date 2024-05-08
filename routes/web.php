<?php

use Illuminate\Support\Facades\Route;
use App\Models\Region;
use App\Models\Jardin;
use App\Models\Classe;
use App\Models\Section;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\JardinController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SectionController;


Route::get('/admin', function () {
    return view('admin.utilisateur');
});

Route::get('/employee', function () {
    return view('employeeList');
})->name('employee');

Route::get('/parent', function () {
    return view('parentList');
})->name('parent');

Route::get('/enfant', function () {
    return view('enfantList');
})->name('enfant');


Route::get('/regionList',[RegionController::class, 'index'])->name('region.index');
Route::post('/ajouterregion', [RegionController::class, 'create'])->name('region.create');


Route::get('/jardinList',[JardinController::class, 'index'])->name('jardin.index');

Route::get('/sectionList',[SectionController::class, 'index'])->name('section.index');


Route::get('/classeList',[ClasseController::class, 'index'])->name('classe.index');




?>