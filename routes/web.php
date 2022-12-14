<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CompetitionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Cache\Store;

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

// Home view route
Route::get('/', HomeController::class)->name('home');

// clubs routes
Route::get('clubs', [ClubController::class, 'indexClub'])->name('clubs.index');
Route::get('clubs/create', [ClubController::class, 'createClub'])->name('clubs.create');
Route::post('clubs', [ClubController::class, 'storeClub'])->name('clubs.store');
Route::get('clubs/{club}', [ClubController::class, 'showClub'])->name('clubs.show');
Route::get('clubs/{club}/edit', [ClubController::class, 'editClub'])->name('clubs.edit');
Route::put('clubs/{club}', [ClubController::class, 'updateClub'])->name('clubs.update');
Route::delete('clubs/{club}', [ClubController::class, 'destroyClub'])->name('clubs.destroy');

// players routes
Route::get('players', [PlayerController::class, 'indexPlayer'])->name('players.index');
Route::get('players/create', [PlayerController::class, 'createPlayer'])->name('players.create');
Route::post('players', [PlayerController::class, 'storePlayer'])->name('players.store');
Route::get('players/{player}', [PlayerController::class, 'showPlayer'])->name('players.show');
Route::get('players/{player}/edit', [PlayerController::class, 'editPlayer'])->name('players.edit');
Route::put('players/{player}', [PlayerController::class, 'updatePlayer'])->name('players.update');
Route::delete('players/{player}', [PlayerController::class, 'destroyPlayer'])->name('players.destroy');

// competitions routes
Route::get('competitions', [CompetitionController::class, 'indexCompetition'])->name('competitions.index');
Route::get('competitions/create', [CompetitionController::class, 'createCompetition'])->name('competitions.create');
Route::post('competitions', [CompetitionController::class, 'storeCompetition'])->name('competitions.store');
Route::get('competitions/{competition}', [CompetitionController::class, 'showCompetition'])->name('competitions.show');
Route::get('competitions/{competition}/edit', [CompetitionController::class, 'editCompetition'])->name('competitions.edit');
Route::put('competitions/{competition}', [CompetitionController::class, 'updateCompetition'])->name('competitions.update');
Route::delete('competitions/{competition}', [CompetitionController::class, 'destroyCompetition'])->name('competitions.destroy');