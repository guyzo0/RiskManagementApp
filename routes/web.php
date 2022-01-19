<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\DecideurMiddleware;
use App\Http\Middleware\Expert;

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
Route::get('decideur/code', 'Riskcontroller@code')->name('code');



Route::get('expert/login', 'Expert\LoginController@showLoginExpert')->name('expert.login');

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


Route::get('expert/home', 'ExpertController@index')->name('expert.home');

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
Route::post('formulaire/formpro/store', 'Risk\ProcessusController@store')->name('RisqueProcessus.store');
Route::get('validation/processus/processus', 'Risk\ProcessusController@list')->name('risque_processus');
Route::get('validation/processus/processus_edit{id}', 'Risk\ProcessusController@edit')->name('risqueProcessus_edit');
Route::post('validation/processus/processus/update{id}', 'Risk\ProcessusController@update')->name('risqueProcessus_update');
Route::get('validation/processus/processus/delete{id}', 'Risk\ProcessusController@destroy')->name('risqueProcessus_delete');
Route::get('validation/processus/processus_list', 'Risk\ProcessusController@riskList')->name('listRisque_processus');
Route::get('validation/processus/processus_etat{id}', 'Risk\ProcessusController@etat')->name('etat_processus');

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
Route::post('formulaire/formact/store', 'Risk\ActiviteController@store')->name('RisqueActivite.store');
Route::get('validation/activite/activite', 'Risk\ActiviteController@list')->name('risque_activite');
Route::get('validation/activite/activite_edit{id}', 'Risk\ActiviteController@edit')->name('risqueActivite_edit');
Route::post('validation/activite/activite/update{id}', 'Risk\ActiviteController@update')->name('risqueActivite_update');
Route::get('validation/activite/activite/delete{id}', 'Risk\ActiviteController@destroy')->name('risqueActivite_delete');
Route::get('validation/activite/activite_list', 'Risk\ActiviteController@riskList')->name('listRisque_activite');
Route::get('validation/activite/activite_etat{id}', 'Risk\ActiviteController@etat')->name('etat_activite');

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
Route::post('formulaire/formper/store', 'Risk\PersonneController@store')->name('RisquePersonne.store');
Route::get('validation/personne/personne', 'Risk\PersonneController@list')->name('risque_personne');
Route::get('validation/personne/personne_edit{id}', 'Risk\PersonneController@edit')->name('risquePersonne_edit');
Route::post('validation/personne/personne/update{id}', 'Risk\PersonneController@update')->name('risquePersonne_update');
Route::get('validation/personne/personne/delete{id}', 'Risk\PersonneController@destroy')->name('risquePersonne_delete');
Route::get('validation/personne/personne_list', 'Risk\PersonneController@riskList')->name('listRisque_personne');
Route::get('validation/personne/personne_etat{id}', 'Risk\PersonneController@etat')->name('etat_personne');

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
Route::post('formulaire/formdir/store', 'Risk\DirectionController@store')->name('RisqueDirection.store');
Route::get('validation/direction/direction', 'Risk\DirectionController@list')->name('risque_direction');
Route::get('validation/direction/direction_edit{id}', 'Risk\DirectionController@edit')->name('risqueDirection_edit');
Route::post('validation/direction/direction/update{id}', 'Risk\DirectionController@update')->name('risqueDirection_update');
Route::get('validation/direction/direction/direction{id}', 'Risk\DirectionController@destroy')->name('risqueDirection_delete');
Route::get('validation/direction/direction_list', 'Risk\DirectionController@riskList')->name('listRisque_direction');
Route::get('validation/direction/direction_etat{id}', 'Risk\DirectionController@etat')->name('etat_direction');

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
Route::post('formulaire/formdep/store', 'Risk\DepartementController@store')->name('RisqueDepartement.store');
Route::get('validation/departement/departement', 'Risk\DepartementController@list')->name('risque_departement');
Route::get('validation/departement/departement_edit{id}', 'Risk\DepartementController@edit')->name('risqueDepartement_edit');
Route::post('validation/departement/departement/update{id}', 'Risk\DepartementController@update')->name('risqueDepartement_update');
Route::get('validation/departement/departement/delete{id}', 'Risk\DepartementController@destroy')->name('risqueDepartement_delete');
Route::get('validation/departement/departement_list', 'Risk\DepartementController@riskList')->name('listRisque_departement');
Route::get('validation/departement/departement_etat{id}', 'Risk\DepartementController@etat')->name('etat_departement');


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
Route::post('formulaire/formdiv/store', 'Risk\DivisionController@store')->name('RisqueDivision.store');
Route::get('validation/division/division', 'Risk\DivisionController@list')->name('risque_division');
Route::get('validation/division/division_edit{id}', 'Risk\DivisionController@edit')->name('risqueDivision_edit');
Route::post('validation/division/division/update{id}', 'Risk\DivisionController@update')->name('risqueDivision_update');
Route::get('validation/division/division/delete{id}', 'Risk\DivisionController@destroy')->name('risqueDivision_delete');
Route::get('validation/division/division_list', 'Risk\DivisionController@riskList')->name('listRisque_division');
Route::get('validation/division/division_etat{id}', 'Risk\DivisionController@etat')->name('etat_division');

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
Route::post('formulaire/formequ/store', 'Risk\EquipementController@store')->name('RisqueEquipement.store');
Route::get('validation/equipement/equipement', 'Risk\EquipementController@list')->name('risque_equipement');
Route::get('validation/equipement/equipement_edit{id}', 'Risk\EquipementController@edit')->name('risqueEquipement_edit');
Route::post('validation/equipement/equipement/update{id}', 'Risk\EquipementController@update')->name('risqueEquipement_update');
Route::get('validation/equipement/equipement/delete{id}', 'Risk\EquipementController@destroy')->name('risqueEquipement_delete');
Route::get('validation/equipement/equipement_list', 'Risk\EquipementController@riskList')->name('listRisque_equipement');
Route::get('validation/equipement/equipement_etat{id}', 'Risk\EquipementController@etat')->name('etat_equipement');

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
Route::post('formulaire/formmod/store', 'Risk\ModuleController@store')->name('RisqueModule.store');
Route::get('validation/module/module', 'Risk\ModuleController@list')->name('risque_module');
Route::get('validation/module/module_edit{id}', 'Risk\ModuleController@edit')->name('risqueModule_edit');
Route::post('validation/module/module/update{id}', 'Risk\ModuleController@update')->name('risqueModule_update');
Route::get('validation/module/module/delete{id}', 'Risk\ModuleController@destroy')->name('risqueModule_delete');
Route::get('validation/module/module_list', 'Risk\ModuleController@riskList')->name('listRisque_module');
Route::get('validation/module/module_etat{id}', 'Risk\ModuleController@etat')->name('etat_module');

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
Route::post('formulaire/formcar/store', 'Risk\CarteController@store')->name('RisqueCarte.store');
Route::get('validation/carte/carte', 'Risk\CarteController@list')->name('risque_carte');
Route::get('validation/carte/carte_edit{id}', 'Risk\CarteController@edit')->name('risqueCarte_edit');
Route::post('validation/carte/carte/update{id}', 'Risk\CarteController@update')->name('risqueCarte_update');
Route::get('validation/carte/carte/delete{id}', 'Risk\CarteController@destroy')->name('risqueCarte_delete');
Route::get('validation/carte/carte_list', 'Risk\CarteController@riskList')->name('listRisque_carte');
Route::get('validation/carte/carte_etat{id}', 'Risk\CarteController@etat')->name('etat_carte');

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
Route::post('formulaire/formpor/store', 'Risk\PortController@store')->name('RisquePort.store');
Route::get('validation/port/port', 'Risk\PortController@list')->name('risque_port');
Route::get('validation/port/port_edit{id}', 'Risk\PortController@edit')->name('risquePort_edit');
Route::post('validation/port/port/update{id}', 'Risk\PortController@update')->name('risquePort_update');
Route::get('validation/port/port/delete{id}', 'Risk\PortController@destroy')->name('risquePort_delete');
Route::get('validation/port/port_list', 'Risk\PortController@riskList')->name('listRisque_port');
Route::get('validation/port/port_etat{id}', 'Risk\PortController@etat')->name('etat_port');
Route::get('validation/port/general', 'Risk\PortController@Generale')->name('general_port');



Route::get('global/list_form', 'GlobalController@list_form')->name('list_form');
Route::get('global/list_etat', 'GlobalController@list_etat')->name('list_etat');
Route::get('global/list_validation', 'GlobalController@list_validation')->name('list_validation');
Route::get('global/list_datab', 'GlobalController@list_datab')->name('list_datab');
Route::get('global/list_detail', 'GlobalController@list_detail')->name('list_detail');

Route::get('global/form/port/por', 'Risk\PortController@global_form')->name('globalform_port');
Route::get('global/form/carte/car', 'Risk\CarteController@global_form')->name('globalform_carte');
Route::get('global/form/module/mod', 'Risk\ModuleController@global_form')->name('globalform_module');
Route::get('global/form/equipement/equ', 'Risk\EquipementController@global_form')->name('globalform_equipement');
Route::get('global/form/division/div', 'Risk\DivisionController@global_form')->name('globalform_division');
Route::get('global/form/departement/dep', 'Risk\DepartementController@global_form')->name('globalform_departement');
Route::get('global/form/direction/dir', 'Risk\DirectionController@global_form')->name('globalform_direction');
Route::get('global/form/personne/per', 'Risk\PersonneController@global_form')->name('globalform_personne');
Route::get('global/form/activite/act', 'Risk\ActiviteController@global_form')->name('globalform_activite');
Route::get('global/form/processus/pro', 'Risk\ProcessusController@global_form')->name('globalform_processus');



Route::get('global.form.port.general_port', 'PortController@niveau_graviteGeneral')->name('general_port');



Route::get('global/form/act_verify', 'Risk\ActiviteController@verify')->name('actVerify');
Route::get('global/form/act/delete', 'Risk\ActiviteController@delete')->name('actform_delete');

Route::get('global/form/car_verify', 'Risk\CarteController@verify')->name('carVerify');
Route::get('global/form/car/delete', 'Risk\CarteController@delete')->name('carform_delete');

Route::get('global/form/dep_verify', 'Risk\DepartementController@verify')->name('depVerify');
Route::get('global/form/dep/delete', 'Risk\DepartementController@delete')->name('depform_delete');

Route::get('global/form/dir_verify', 'Risk\DirectionController@verify')->name('dirVerify');
Route::get('global/form/dir/delete', 'Risk\DirectionController@delete')->name('dirform_delete');

Route::get('global/form/div_verify', 'Risk\DivisionController@verify')->name('divVerify');
Route::get('global/form/div/delete', 'Risk\DivisionController@delete')->name('divform_delete');

Route::get('global/form/equ_verify', 'Risk\EquipementController@verify')->name('equVerify');
Route::get('global/form/equ/delete', 'Risk\EquipementController@delete')->name('equform_delete');

Route::get('global/form/mod_verify', 'Risk\ModuleController@verify')->name('modVerify');
Route::get('global/form/mod/delete', 'Risk\ModuleController@delete')->name('modform_delete');

Route::get('global/form/per_verify', 'Risk\PersonneController@verify')->name('perVerify');
Route::get('global/form/per/delete', 'Risk\PersonneController@delete')->name('perform_delete');

Route::get('global/form/por_verify', 'Risk\PortController@verify')->name('porVerify');
Route::get('global/form/por/delete', 'Risk\PortController@delete')->name('porform_delete');

Route::get('global/form/pro_verify', 'Risk\ProcessusController@verify')->name('proVerify');
Route::get('global/form/pro/delete', 'Risk\ProcessusController@delete')->name('proform_delete');





