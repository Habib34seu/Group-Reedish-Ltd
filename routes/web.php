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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', 'IndexController@index');

// ABOUT ROUTE -------------------------------------------
Route::get('/mission', 'AboutController@index');
Route::get('/md', 'AboutController@about_md');
Route::get('/management', 'AboutController@about_management');

// Business Route -------------------------------------------
Route::get('/rkl', 'BusinessController@index_rkl');
Route::get('/rsl', 'BusinessController@index_rsl');
Route::get('/rtsl', 'BusinessController@index_rtsl');
Route::get('/paknit', 'BusinessController@index_paknit');
Route::get('/rppl', 'BusinessController@index_rppl');
Route::get('/rbyl', 'BusinessController@index_rbyl');
Route::get('/rfbl', 'BusinessController@index_rfbl');


// Certificates -------------------------------------------
Route::get('/rkl_cr', 'CertificatesController@index_rkl');
Route::get('/paknit_cr', 'CertificatesController@index_paknit_cr');
Route::get('/rsl_cr', 'CertificatesController@index_rsl_cr');
Route::get('/rtsl_cr', 'CertificatesController@index_rtsl_cr');
Route::get('/rppl_cr', 'CertificatesController@index_rppl_cr');

// Contact Us -------------------------------------------
Route::get('/contact', 'ContactController@index');

// Photo Gallery -------------------------------------------
Route::get('/rkl_pt', 'PhotoGalleryController@index_rkl_pt');
Route::get('/paknit_pt', 'PhotoGalleryController@index_paknit_pt');
Route::get('/rsl_pt', 'PhotoGalleryController@index_rsl_pt');
Route::get('/rtsl_pt', 'PhotoGalleryController@index_rtsl_pt');


// Sustainability -------------------------------------------
Route::get('/sustain', 'SustainabilityController@index_sustain');
