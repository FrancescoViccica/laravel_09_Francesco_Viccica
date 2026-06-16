<?php

use App\Http\Controllers\MerchController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsdetail'])->name('aboutUsDetail');


Route::get('/contatti', [PublicController::class, 'contacts'] )->name('contacts');


Route::get('/articoli', [MerchController::class, 'articoli'])->name('merch.list');


Route::get('/merch/dettaglio-articoli/{id}', [MerchController::class, 'dettaglioArticoli'])->name('dettaglio.articoli');