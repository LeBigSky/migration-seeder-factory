<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* FRONT VIEWS ROUTES*/
Route::get('/', [BatimentController::class, 'home']);
Route::get('/batiment', [BatimentController::class, 'batiment'])->name('batiment');
Route::get('/eleves', [EleveController::class, 'eleve'])->name('eleves');
Route::get('/formations', [FormationController::class, 'formation'])->name('formations');
Route::get('/types', [TypeformationController::class, 'type'])->name('types');

/* BACK VIEWS ROUTES*/
Route::get('/admin', [BackController::class, 'back'])->name('admin.home');
Route::get('/admin/batiment', [BatimentController::class, 'backbatiment'])->name('admin.batiments');
Route::get('/admin/formations', [FormationController::class, 'backformation'])->name('admin.formations');
Route::get('/admin/types', [TypeformationController::class, 'backtype'])->name('admin.types');
Route::get('/admin/eleves', [EleveController::class, 'backeleve'])->name('admin.eleves');
Route::get('admin/batiment/create', [BatimentController::class, 'create'])->name('batiment.create');

/*STORE ROUTES FUNCTIONS*/ 
Route::post('/store/batiement', [BatimentController::class, 'store'])->name('store.batiment');
Route::get('/batiment/edit/{id}', [BatimentController::class, 'edit']);
Route::get('/batiment/show/{id}', [BatimentController::class, 'show']);
Route::post('/batiment/update/{id}', [BatimentController::class, 'update']);
Route::delete('/batiment/delete/{id}', [BatimentController::class, 'delete']);

/*ELEVES*/
Route::post('/store/eleve', [EleveController::class, 'store'])->name('store.eleve');
Route::get('/eleve/edit/{id}', [EleveController::class, 'edit']);
Route::get('/eleve/show/{id}', [EleveController::class, 'show']);
Route::post('/eleve/update/{id}', [EleveController::class, 'update']);
Route::delete('/eleve/delete/{id}', [EleveController::class, 'delete']);
Route::get('admin/eleves/create', [EleveController::class, 'create'])->name('eleves.create');

/*FORMATIONS*/
Route::post('/store/formation', [FormationController::class, 'store'])->name('store.formation');
Route::get('/formation/edit/{id}', [FormationController::class, 'edit']);
Route::get('/formation/show/{id}', [FormationController::class, 'show']);
Route::post('/formation/update/{id}', [FormationController::class, 'update']);
Route::delete('/formation/delete/{id}', [FormationController::class, 'delete']);
Route::get('admin/formation/create', [FormationController::class, 'create'])->name('formation.create');

/*TYPES*/
Route::post('/store/type', [TypeformationController::class, 'store'])->name('store.type');
Route::get('/type/edit/{id}', [TypeformationController::class, 'edit']);
Route::get('/type/show/{id}', [TypeformationController::class, 'show']);
Route::post('/type/update/{id}', [TypeformationController::class, 'update']);
Route::delete('/type/delete/{id}', [TypeformationController::class, 'delete']);
Route::get('admin/type/create', [TypeformationController::class, 'create'])->name('type.create');