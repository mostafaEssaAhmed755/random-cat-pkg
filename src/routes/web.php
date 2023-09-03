<?php

use MostafaEssaAhmed755\RandomCatPkg\Controllers\RandomCatController;
use Illuminate\Support\Facades\Route;

Route::get('random-cat', RandomCatController::class);
