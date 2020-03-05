<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/applicant_login','ApplicantController@index');
Route::get('/company_login','CompanyProfileController@login');
Route::get('/candidate_profile','ApplicantController@show');
Route::get('/create_job','JobDetailController@index');
Route::get('/manage_candidate','CompanyProfileController@manage_candidate');

Route::post('/register_applicant','ApplicantController@register');
Route::post('/login_applicant','ApplicantController@login');


