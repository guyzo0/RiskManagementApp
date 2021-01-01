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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('decideur/login', 'Decideur\LoginController@showLoginForm')->name('decideur.login');
Route::get('decideur/home', 'DecideurController@index')->name('decideur.home');
Route::post('decideur/login', 'Decideur\LoginController@login');
Route::post('decideur/logout', 'Decideur\LoginController@logout')->name('decideur.logout');
Route::post('decideur/passwords/email', 'Decideur\ForgotPasswordController@sendResetLinkEmails')->name('decideur.passwords.email');
Route::post('decideur/passwords/reset', 'Decideur\ResetPasswordController@resetPasswords')->name('decideur.passwords.update');
Route::get('decideur/passwords/reset', 'Decideur\ForgotPasswordController@showLinkRequestForm')->name('decideur.passwords.request');
Route::get('decideur/passwords/reset/{token}', 'Decideur\ResetPasswordController@showResetForm')->name('decideur.passwords.reset');



Route::get('expert/login', 'Expert\LoginController@showLoginExpert')->name('expert.login');
Route::get('expert/home', 'ExpertController@index')->name('expert.home');
Route::post('expert/login', 'Expert\LoginController@Login');
Route::post('expert/logout', 'Expert\LoginController@logout')->name('expert.logout');
Route::get('expert/register', 'Expert\RegisterController@showRegistrationForm')->name('expert.register');
Route::post('expert/register', 'Expert\RegisterController@register');
Route::post('expert/passwords/email', 'Expert\ForgotPasswordController@sendResetLinkEmails')->name('expert.passwords.email');
Route::post('expert/passwords/reset', 'Expert\ResetPasswordController@resetPasswords')->name('expert.passwords.update');
Route::get('expert/passwords/reset', 'Expert\ForgotPasswordController@showLinkRequestForm')->name('expert.passwords.request');
Route::get('expert/passwords/reset/{token}', 'Expert\ResetPasswordController@showResetForm')->name('expert.passwords.reset');

Route::get('/form', [
    'uses' => 'Riskcontroller@getForm',
    'as' => 'form'
]);


Route::group(['middleware' => 'auth'], function(){

Route::get('database/processus/processus', 'ProcessusController@index')->name('processus');
Route::get('database/processus/processus/add', 'ProcessusController@add')->name('processus.add');
Route::post('database/processus/processus/store', 'ProcessusController@store')->name('processus.store');
Route::get('database/processus/processus/delete{id}', 'ProcessusController@destroy')->name('processus.delete');
Route::get('database/processus/processus/edit{id}', 'ProcessusController@edit')->name('processus.edit');
Route::get('database/processus/processus/show{id}', 'ProcessusController@show')->name('processus.show');
Route::post('database/processus/processus/update/{id}', 'ProcessusController@update')->name('processus.update');
Route::get('etat/processus/pro', 'Risk\ProcessusController@index')->name('pro');
Route::get('formulaire/formpro', 'Risk\ProcessusController@getForm')->name('formpro');
Route::get('etat/processus/pro/show{id}', 'Risk\ProcessusController@show')->name('pro.show');

Route::get('database/activite/activite', 'ActiviteController@index')->name('activite');
Route::get('database/activite/activite/add', 'ActiviteController@add')->name('activite.add');
Route::post('database/activite/activite/store', 'ActiviteController@store')->name('activite.store');
Route::get('database/activite/activite/delete{id}', 'ActiviteController@destroy')->name('activite.delete');
Route::get('database/activite/activite/edit{id}', 'ActiviteController@edit')->name('activite.edit');
Route::get('database/activite/activite/show{id}', 'ActiviteController@show')->name('activite.show');
Route::post('database/activite/activite/update/{id}', 'ActiviteController@update')->name('activite.update');
Route::get('etat/activite/act', 'Risk\ActiviteController@index')->name('act');
Route::get('formulaire/formact', 'Risk\ActiviteController@getForm')->name('formact');
Route::get('etat/activite/act/show{id}', 'Risk\ActiviteController@show')->name('act.show');

Route::get('database/personne/personne', 'PersonneController@index')->name('personne');
Route::get('database/personne/personne/add', 'PersonneController@add')->name('personne.add');
Route::post('database/personne/personne/store', 'PersonneController@store')->name('personne.store');
Route::get('database/personne/personne/delete{id}', 'PersonneController@destroy')->name('personne.delete');
Route::get('database/personne/personne/edit{id}', 'PersonneController@edit')->name('personne.edit');
Route::get('database/personne/personne/show{id}', 'PersonneController@show')->name('personne.show');
Route::post('database/personne/personne/update/{id}', 'PersonneController@update')->name('personne.update');
Route::get('etat/personne/per', 'Risk\PersonneController@index')->name('per');
Route::get('formulaire/formper', 'Risk\PersonneController@getForm')->name('formper');
Route::get('etat/personne/per/show{id}', 'Risk\PersonneController@show')->name('per.show');

Route::get('database/direction/direction', 'DirectionController@index')->name('direction');
Route::get('database/direction/direction/add', 'DirectionController@add')->name('direction.add');
Route::post('database/direction/direction/store', 'DirectionController@store')->name('direction.store');
Route::get('database/direction/direction/delete{id}', 'DirectionController@destroy')->name('direction.delete');
Route::get('database/direction/direction/edit{id}', 'DirectionController@edit')->name('direction.edit');
Route::get('database/direction/direction/show{id}', 'DirectionController@show')->name('direction.show');
Route::post('database/direction/direction/update{id}', 'DirectionController@update')->name('direction.update');
Route::get('etat/direction/direction', 'Risk\DirectionController@index')->name('dir');
Route::get('formulaire/formdir', 'Risk\DirectionController@getForm')->name('formdir');
Route::get('etat/direction/direction/show{id}', 'Risk\DirectionController@show')->name('dir.show');

Route::get('database/departement/departement', 'DepartementController@index')->name('departement');
Route::get('database/departement/departement/add', 'DepartementController@add')->name('departement.add');
Route::post('database/departement/departement/store', 'DepartementController@store')->name('departement.store');
Route::get('database/departement/departement/delete{id}', 'DepartementController@destroy')->name('departement.delete');
Route::get('database/departement/departement/edit{id}', 'DepartementController@edit')->name('departement.edit');
Route::get('database/departement/departement/show{id}', 'DepartementController@show')->name('departement.show');
Route::post('database/departement/departement/update/{id}', 'DepartementController@update')->name('departement.update');
Route::get('etat/departement/dep', 'Risk\DepartementController@index')->name('dep');
Route::get('formulaire/formdep', 'Risk\DepartementController@getForm')->name('formdep');
Route::get('etat/departement/dep/show{id}', 'Risk\departementController@show')->name('dep.show');

Route::get('database/division/division', 'DivisionController@index')->name('division');
Route::get('database/division/division/add', 'DivisionController@add')->name('division.add');
Route::post('database/division/division/store', 'DivisionController@store')->name('division.store');
Route::get('database/division/division/delete{id}', 'DivisionController@destroy')->name('division.delete');
Route::get('database/division/division/edit{id}', 'DivisionController@edit')->name('division.edit');
Route::get('database/division/division/show{id}', 'DivisionController@show')->name('division.show');
Route::post('database/division/division/update/{id}', 'DivisionController@update')->name('division.update'); 
Route::get('etat/division/div', 'Risk\DivisionController@index')->name('div');
Route::get('formulaire/formdiv', 'Risk\DivisionController@getForm')->name('formdiv');
Route::get('etat/division/div/show{id}', 'Risk\DivisionController@show')->name('div.show');

Route::get('database/equipement/equipement', 'EquipementController@index')->name('equipement');
Route::get('database/equipement/equipement/add', 'EquipementController@add')->name('equipement.add');
Route::post('database/equipement/equipement/store', 'EquipementController@store')->name('equipement.store');
Route::get('database/equipement/equipement/delete{id}', 'EquipementController@destroy')->name('equipement.delete');
Route::get('database/equipement/equipement/edit{id}', 'EquipementController@edit')->name('equipement.edit');
Route::get('database/equipement/equipement/show{id}', 'EquipementController@show')->name('equipement.show');
Route::post('database/equipement/equipement/update/{id}', 'EquipementController@update')->name('equipement.update');
Route::post('database/division/division/update/{id}', 'DivisionController@update')->name('division.update'); 
Route::get('etat/equipement/equ', 'Risk\EquipementController@index')->name('equ');
Route::get('formulaire/formequ', 'Risk\EquipementController@getForm')->name('formequ');
Route::get('etat/Equipement/equ/show{id}', 'Risk\EquipementController@show')->name('equ.show');

Route::get('database/module/module', 'ModuleController@index')->name('module');
Route::get('database/module/module/add', 'ModuleController@add')->name('module.add');
Route::post('database/module/module/store', 'ModuleController@store')->name('module.store');
Route::get('database/module/module/delete{id}', 'ModuleController@destroy')->name('module.delete');
Route::get('database/module/module/edit{id}', 'ModuleController@edit')->name('module.edit');
Route::get('database/module/module/show{id}', 'ModuleController@show')->name('module.show');
Route::post('database/module/module/update/{id}', 'ModuleController@update')->name('module.update');
Route::get('etat/module/mod', 'Risk\ModuleController@index')->name('mod');
Route::get('formulaire/formmod', 'Risk\ModuleController@getForm')->name('formmod');
Route::get('etat/module/mod/show{id}', 'Risk\ModuleController@show')->name('mod.show');

Route::get('database/carte/carte', 'CarteController@index')->name('carte');
Route::get('database/carte/carte/add', 'CarteController@add')->name('carte.add');
Route::post('database/carte/carte/store', 'CarteController@store')->name('carte.store');
Route::get('database/carte/carte/delete{id}', 'CarteController@destroy')->name('carte.delete');
Route::get('database/carte/carte/edit{id}', 'CarteController@edit')->name('carte.edit');
Route::get('database/carte/carte/show{id}', 'CarteController@show')->name('carte.show');
Route::post('database/carte/carte/update/{id}', 'CarteController@update')->name('carte.update');
Route::get('etat/carte/car', 'Risk\CarteController@index')->name('car');
Route::get('formulaire/formcar', 'Risk\CarteController@getForm')->name('formcar');
Route::get('etat/carte/car/show{id}', 'Risk\CarteController@show')->name('car.show');

Route::get('database/port/port', 'PortController@index')->name('port');
Route::get('database/port/port/add', 'PortController@add')->name('port.add');
Route::post('database/port/port/store', 'PortController@store')->name('port.store');
Route::get('database/port/port/delete{id}', 'PortController@destroy')->name('port.delete');
Route::get('database/port/port/edit{id}', 'PortController@edit')->name('port.edit');
Route::get('database/port/port/show{id}', 'PortController@show')->name('port.show');
Route::post('database/port/port/update/{id}', 'PortController@update')->name('port.update');
Route::get('etat/port/por', 'Risk\PortController@index')->name('por');
Route::get('formulaire/formpor', 'Risk\PortController@getForm')->name('formpor');
Route::get('etat/port/por/show{id}', 'Risk\PortController@show')->name('por.show');
});










