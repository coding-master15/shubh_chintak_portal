<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', function (Request $request) {
    return (new ApiController($request))->login();
});

Route::post('register', function (Request $request) {
    return (new ApiController($request))->register();
});

Route::post('leads', function (Request $request) {
    return (new ApiController($request))->getLeads();
});
