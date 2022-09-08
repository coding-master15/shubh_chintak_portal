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

Route::post('request/withdraw', function (Request $request) {
    return (new ApiController($request))->requestWithdrawal();
});

Route::post('withdrawal/requests', function (Request $request) {
    return (new ApiController($request))->withdrawalRequests();
});

Route::post('leads', function (Request $request) {
    return (new ApiController($request))->getLeads();
});

Route::post('set/token', function (Request $request) {
    return (new ApiController($request))->setToken();
});

Route::post('testimonials', function (Request $request) {
    return (new ApiController($request))->getTestimonials();
});

Route::post('stories', function (Request $request) {
    return (new ApiController($request))->getSuccessStories();
});

Route::post('banners', function (Request $request) {
    return (new ApiController($request))->getBanners();
});

Route::post('hotdeals', function (Request $request) {
    return (new ApiController($request))->getHotDeals();
});

Route::post('lead_by_id', function (Request $request) {
    return (new ApiController($request))->getLeadById();
});

Route::post('leads/add', function (Request $request) {
    return (new ApiController($request))->addLead();
});

Route::post('address/save', function (Request $request) {
    return (new ApiController($request))->saveAddress();
});

Route::post('bank/save', function (Request $request) {
    return (new ApiController($request))->saveBankDetails();
});

Route::post('address/get', function (Request $request) {
    return (new ApiController($request))->getAddress();
});

Route::post('bank/get', function (Request $request) {
    return (new ApiController($request))->getBankDetails();
});
