<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  return response()->json(['message' => 'Hello, world!']);

});


// that being used when logged in make it as group :
Route::middleware('auth:sanctum')->group(function () {

  Route::get('/user', function (Request $request) {

    $user = Auth::guard('web')->user();

    return response()->json([
      'message' => 'Hello, world!',
      'user' => $user
    ]);

  });

});
