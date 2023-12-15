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

Route::post('reg', function (Request $request) {
    return (new ApiController($request))->regl();
});

Route::post('request/withdraw', function (Request $request) {
    return (new ApiController($request))->requestWithdrawal();
});

Route::post('click/banner', function (Request $request) {
    return (new ApiController($request))->addBannerClick();
});

Route::post('withdrawal/requests', function (Request $request) {
    return (new ApiController($request))->withdrawalRequests();
});

Route::post('leads', function (Request $request) {
    return (new ApiController($request))->getLeads();
});

Route::post('notifications', function (Request $request) {
    return (new ApiController($request))->getNotifications();
});

Route::post('set/token', function (Request $request) {
    return (new ApiController($request))->setToken();
});

Route::post('get/token', function (Request $request) {
    return (new ApiController($request))->getToken();
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

Route::post('user_by_id', function (Request $request) {
    return (new ApiController($request))->getUserById();
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

Route::post('form/save', function (Request $request) {
    return (new ApiController($request))->saveSubmission();
});

Route::post('address/get', function (Request $request) {
    return (new ApiController($request))->getAddress();
});

Route::post('bank/get', function (Request $request) {
    return (new ApiController($request))->getBankDetails();
});

Route::post('notifications/read', function (Request $request) {
    return (new ApiController($request))->readNotifications();
});
