<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FieldsController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\SignaturesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneralController;



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
Route::get('/getNameForLogin/{name}', [CompaniesController::class, 'log_in_name']);
Route::put('/updateCompanies/{id}', [CompaniesController::class, 'update']);
Route::delete('/deleteCompanies/{id}', [CompaniesController::class, 'delete']);

Route::get('/users', [UsersController::class, 'list']);
Route::post('/createUsers', [UsersController::class, 'create']);
Route::get('/showUsers/{id}', [UsersController::class, 'item']);
Route::put('/updateUsers/{id}', [UsersController::class, 'update']);
Route::delete('/deleteUsers/{id}', [UsersController::class, 'delete']);

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

Route::get('/general', [GeneralController::class, 'list']);
Route::post('/createGeneral', [GeneralController::class, 'create']);
Route::get('/showGeneral/{id}', [GeneralController::class, 'item']);
Route::put('/updateGeneral/{id}', [GeneralController::class, 'update']);
Route::delete('/deleteGeneral/{id}', [GeneralController::class, 'delete']);


// Route::prefix('auth')->middleware('api')->controller(AuthController::class)->group(function(){
//     Route::post('login', 'login');
//     Route::post('user', 'user');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
// });

