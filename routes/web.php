<?php

use App\Http\Controllers\PagesControllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home']);
