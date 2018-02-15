<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function(){
  Route::get('/accueil1', function(){
    return view('accueil1');
  })->name('accueil1');
  Route::get('/accueil', function(){
    return view('accueil');
  })->name('accueil');
  Route::get('/occupation', function() {
    return view('occupation');
  })->name('occupation');
  Route::get('/etudiant', function() {
    return view('etudiant');
  })->name('etudiant');
  Route::get('/positions/{id}/destroyForm', 'PositionController@destroyForm')->name('positions.destroyForm');
  Route::resource('positions', 'PositionController');
  Route::get('/batiments/{id}/destroyForm', 'BatimentController@destroyForm')->name('batiments.destroyForm');
  Route::resource ('batiments', 'BatimentController');
  Route::get('/chambres/{id}/destroyForm', 'ChambreController@destroyForm')->name('chambres.destroyForm');
  Route::resource ('chambres', 'ChambreController');
  Route::get('/couloirs/{id}/destroyForm', 'CouloirController@destroyForm')->name('couloirs.destroyForm');
  Route::resource ('couloirs', 'CouloirController');
  Route::get('/etages/{id}/destroyForm', 'EtageController@destroyForm')->name('etages.destroyForm');
  Route::resource ('etages', 'EtageController');
  Route::get('/sites/{id}/destroyForm', 'SiteController@destroyForm')->name('sites.destroyForm');
  Route::resource ('sites', 'SiteController');
  Route::get('/reservations/{id}/destroyForm', 'ReservationController@destroyForm')->name('reservations.destroyForm');
  Route::resource('reservations', 'ReservationController');
  Route::get('/codifications/{id}/destroyForm', 'CodificationController@destroyForm')->name('codifications.destroyForm');
  Route::resource('codifications', 'CodificationController');
});

Route::group(['prefix' => 'admin'], function(){
  Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.home');
  Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
  Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
  Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
  /*Route::get('/agents', 'AgentController@index')->name('agents.index');
  Route::post('/agents', 'AgentController@store')->name('agents.store');
  Route::get('/agents/create', 'AgentController@create')->name('agents.create');
  Route::put('/agents/{id}/update', 'AgentController@update')->name('agents.update');
  Route::get('/agents/{agent}/edit', 'AgentController@edit')->name('agents.edit');
  Route::post('/agents/{agent}/destroy', 'AgentController@destroy')->name('agents.destroy');
  Route::get('/agents/{agent}/destroyForm', 'AgentController@destroyForm')->name('agents.destroyForm');*/
  Route::resource ('agents', 'AgentController');
  Route::get('/agents/{agent}/destroyForm', 'AgentController@destroyForm')->name('agents.destroyForm');


});
/*
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/accueil1', function () {
    return view('accueil1');
});
*/






/*
Route::middleware('agent')->group(function () {
    Route::resource ('positions', 'PositionController');
    Route::resource ('batiments', 'BatimentController');
    Route::resource ('chambres', 'ChambreController');
    Route::resource ('etages', 'EtageController');
    Route::resource ('couloirs', 'CouloirController');
});*/
