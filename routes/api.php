<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('/tx/{hash}', [App\Http\Controllers\Api\XrplController::class, 'tx'])->name('api.tx');
Route::get('account_nfts/{address}', [App\Http\Controllers\Api\XrplController::class, 'account_nfts'])->name('api.account_nfts');
