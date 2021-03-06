<?php

use App\Http\Controllers\Api\BudgetController;
use App\Http\Controllers\Api\TagController;
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

Route::get('/', function () {
    return 'hello, world';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tags', [TagController::class, 'index']);

Route::get('budgets', [BudgetController::class, 'index']);
Route::get('budgets/year', [BudgetController::class, 'index']);
Route::get('budgets/month', [BudgetController::class, 'index']);

Route::get('budgets/{id}', [BudgetController::class, 'show']);

Route::post('budgets/save', [BudgetController::class, 'save']);
