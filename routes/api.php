<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  return response()->json(['message' => 'Hello, world!']);

});

Route::get('/user', function (Request $request) {

  return response()->json(['message' => 'Hello, world!']);
  
  
})->middleware('auth:sanctum');
