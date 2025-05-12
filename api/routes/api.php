<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DocumentController,

};

Route::get('/documents', [DocumentController::class, 'index']);