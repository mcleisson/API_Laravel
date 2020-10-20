<?php

use App\Http\Controllers\api\FilmesController;


Route::get('/filmes', [FilmesController::class, 'index']);
