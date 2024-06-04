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
use App\Models\Inscription;
use App\Models\Reinscription;
use App\Models\Desinscription;
use App\Models\Transfer;
use App\Models\Gestionnaire;
use App\Models\Utilisateur;

use App\Http\Controllers\RegionController;
use App\Http\Controllers\JardinController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\PersonelPAuthController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ReinscriptionController;
use App\Http\Controllers\DesinscriptionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\GestionnaireController;
use App\Http\Controllers\ParentAuthController;
use App\Http\Controllers\PersonelAuthController;
use App\Http\Controllers\GestionnaireReinscriptionController;
use App\Http\Controllers\GestionnaireTransfertController;
use App\Http\Controllers\UtilisateurController;

// ajouter la route de auth: en cas de faute il revient dans cette page 
// Dashboard routes
Route::get('/admin', function () {
    return view('statistic');
})->name('admin');

Route::get('/Directrice', function () {
    return view('layouts.sidebarDirectrice');
});

Route::get('/chefService', function () {
    return view('layouts.sidebarChefDeService');
})->name('chefService');

Route::get('/Directrice', function () {
    return view('layouts.sidebarDirectrice');
})->name('Directrice');

Route::get('/chefDepartement', function () {
    return view('layouts.sidebarChefDeDepartement');
})->name('chefDepartement');

Route::get('/gestionnaire', function () {
    return view('layouts.sidebargestionnaire');
})->name('gestionnaire');

Route::get('/parent', function () {
     return view('layouts.sidebarUser');
 })->name('parent');

Route::get('/statistic', function () {
    return view('statistic');
});

Route::get('/employee', function () {
    return view('employeeList');
})->name('employee');

Route::get('/Authentification', [PersonelAuthController::class, 'showLoginForm'])->name('Authentification');
Route::post('/login', [PersonelAuthController::class, 'login'])->name('login');
Route::post('/logout', [PersonelAuthController::class, 'logout'])->name('logout');

Route::get('/parentList', [ParentsController::class, 'index'])->name('parent.index');

Route::get('/enfantList', [EnfantController::class, 'index'])->name('enfant.index');
Route::get('/reafectenfant', [EnfantController::class, 'reafect'])->name('enfant.reafect');

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

Route::get('/Utilisateur', [UtilisateurController::class, 'dashboard'])->middleware('auth');
Route::get('/parent', [ParentsController::class, 'dashboard'])->middleware('auth');

// enfants
Route::get('/enfants', [EnfantController::class, 'index'])->name('enfants.index');
;

Route::get('/inscriptionList', [InscriptionController::class, 'index'])->name('inscription.index');
Route::get('/ajouterInscription', [InscriptionController::class, 'view_ajt'])->name('inscription.view');
Route::post('/createInscription', [InscriptionController::class, 'create'])->name('inscription.create');
Route::get('/jardins/{region_id}', [InscriptionController::class, 'getJardinsByRegion'])->name('jardins.byRegion');


// Reinscriptions
Route::get('/reinscriptionList', [ReinscriptionController::class, 'index'])->name('reinscription.index');
Route::get('/ajouterReinscription', [ReinscriptionController::class, 'view_ajt'])->name('reinscription.view');
Route::post('/createReinscription', [ReinscriptionController::class, 'create'])->name('reinscription.create');
Route::get('/editReinscription/{id}', [ReinscriptionController::class, 'edit'])->name('reinscription.edit');
Route::put('/updateReinscription/{id}', [ReinscriptionController::class, 'update'])->name('reinscription.update');

// desinscriptions
Route::get('/desinscriptionList', [DesinscriptionController::class, 'index'])->name('desinscription.index');
Route::get('/ajouterDesinscription', [DesinscriptionController::class, 'view_ajt'])->name('desinscription.view');
Route::post('/createDesinscription', [DesinscriptionController::class, 'create'])->name('desinscription.create');
// transfert
Route::get('/transfertList', [TransferController::class, 'index'])->name('transfert.index');
Route::get('/ajouterTransfert', [TransferController::class, 'view_ajt'])->name('transfert.view');
Route::post('/createTransfert', [TransferController::class, 'create'])->name('transfert.create');

Route::get('/Login', [ParentAuthController::class, 'showLoginForm'])->name('Login');
Route::post('/Login', [ParentAuthController::class, 'login']);

Route::get('/register', [ParentAuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [ParentAuthController::class, 'register'])->name('register');

Route::post('/Logout', [ParentAuthController::class, 'logout'])->name('Logout');

Route::get('/gestion-preinscriptions', [GestionnaireController::class, 'index'])->name('gestionnaire.inscriptions.index');
Route::post('/gestion-preinscriptions/accept/{id}', [GestionnaireController::class, 'accept'])->name('gestionnaire.inscriptions.accept');
Route::post('/gestion-preinscriptions/reject/{id}', [GestionnaireController::class, 'reject'])->name('gestionnaire.inscriptions.reject');

Route::get('/gestion-reinscriptions', [GestionnaireReinscriptionController::class, 'index'])->name('gestionnaire.reinscriptions.index');
Route::post('/gestion-reinscriptions/accept/{id}', [GestionnaireReinscriptionController::class, 'accept'])->name('gestionnaire.reinscriptions.accept');
Route::post('/gestion-reinscriptions/reject/{id}', [GestionnaireReinscriptionController::class, 'reject'])->name('gestionnaire.reinscriptions.reject');
Route::post('/gestion-reinscriptions/verifyPayment/{id}', [GestionnaireReinscriptionController::class, 'verifyPayment'])->name('gestionnaire.reinscriptions.verifyPayment');

Route::get('/gestion-transferts', [GestionnaireTransfertController::class, 'index'])->name('gestionnaire.transfert.index');
Route::post('/gestion-transferts/accept/{id}', [GestionnaireTransfertController::class, 'accept'])->name('gestionnaire.transfert.accept');
Route::post('/gestion-transferts/reject/{id}', [GestionnaireTransfertController::class, 'reject'])->name('gestionnaire.transfert.reject');
?>