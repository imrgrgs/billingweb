<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('acessos', 'AcessoController');

Route::resource('actives', 'ActiveController');

Route::resource('adesaos', 'AdesaoController');

Route::resource('admins', 'AdminController');

Route::resource('agentes', 'AgenteController');

Route::resource('agentexUsers', 'AgentexUserController');

Route::resource('anuncios', 'AnuncioController');

Route::resource('aparelhos', 'AparelhoController');

Route::resource('ataques', 'AtaqueController');

Route::resource('audio', 'AudioController');

Route::resource('bvaudios', 'BvaudioController');

Route::resource('cabines', 'CabineController');

Route::resource('cacs', 'CacController');

Route::resource('cacRevendas', 'CacRevendaController');

Route::resource('cadFeriados', 'CadFeriadoController');

Route::resource('cdrs', 'CdrController');

Route::resource('celularSms', 'CelularSmsController');

Route::resource('consumos', 'ConsumoController');

Route::resource('contaCorrentes', 'ContaCorrenteController');

Route::resource('contratacaos', 'ContratacaoController');

Route::resource('contratos', 'ContratoController');

Route::resource('cpaAgentes', 'CpaAgenteController');

Route::resource('cpaMasters', 'CpaMasterController');

Route::resource('cpaRevendas', 'CpaRevendaController');

Route::resource('cprasTermins', 'CprasTerminController');

Route::resource('crecAgentes', 'CrecAgenteController');

Route::resource('crececebers', 'CrececeberController');

Route::resource('crecMasters', 'CrecMasterController');

Route::resource('crecRevendas', 'CrecRevendaController');

Route::resource('creditos', 'CreditoController');

Route::resource('credito0800Cartaos', 'Credito0800CartaoController');

Route::resource('credito4003s', 'Credito4003Controller');

Route::resource('creditoAdms', 'CreditoAdmController');

Route::resource('custoTerms', 'CustoTermController');