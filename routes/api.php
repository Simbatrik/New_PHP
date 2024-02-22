<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FieldsController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\SignaturesController;
use App\Http\Controllers\AuthController;

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


Route::get('/companies', [CompaniesController::class, 'list']);
Route::post('/createCompanies', [CompaniesController::class, 'create']);
Route::get('/showCompanies/{id}', [CompaniesController::class, 'item']);
Route::put('/updateCompanies/{id}', [CompaniesController::class, 'update']);
Route::delete('/deleteCompanies/{id}', [CompaniesController::class, 'delete']);

Route::get('/users', [usersController::class, 'list']);
Route::post('/createUsers', [usersController::class, 'create']);
Route::get('/showUsers/{id}', [usersController::class, 'item']);
Route::put('/updateUsers/{id}', [usersController::class, 'update']);
Route::delete('/deleteUsers/{id}', [usersController::class, 'delete']);

Route::get('/forms', [FormsController::class, 'list']);
Route::post('/createForms', [FormsController::class, 'create']);
Route::get('/showForms/{id}', [FormsController::class, 'item']);
Route::put('/updateForms/{id}', [FormsController::class, 'update']);
Route::delete('/deleteForms/{id}', [FormsController::class, 'delete']);

Route::get('/fields', [FieldsController::class, 'list']);
Route::post('/createFields', [FieldsController::class, 'create']);
Route::get('/showFields/{id}', [FieldsController::class, 'item']);
Route::put('/updateFields/{id}', [FieldsController::class, 'update']);
Route::delete('/deleteFields/{id}', [FieldsController::class, 'delete']);

Route::get('/answers', [AnswersController::class, 'list']);
Route::post('/createAnswers', [AnswersController::class, 'create']);
Route::get('/showAnswers/{id}', [AnswersController::class, 'item']);
Route::put('/updateAnswers/{id}', [AnswersController::class, 'update']);
Route::delete('/deleteAnswers/{id}', [AnswersController::class, 'delete']);

Route::get('/signatures', [SignaturesController::class, 'list']);
Route::post('/createSignatures', [SignaturesController::class, 'create']);
Route::get('/showSignatures/{id}', [SignaturesController::class, 'item']);
Route::put('/updateSignatures/{id}', [SignaturesController::class, 'update']);
Route::delete('/deleteSignatures/{id}', [SignaturesController::class, 'delete']);

Route::prefix('auth')->middleware('api')->controller(AuthController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('user', 'user');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

