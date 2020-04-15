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

Route::resource('definePstns', 'DefinePstnController');

Route::resource('discadoxVoips', 'DiscadoxVoipController');

Route::resource('envioSms', 'EnvioSmsController');

Route::resource('estatisticas', 'EstatisticaController');

Route::resource('extensionTables', 'ExtensionTableController');

Route::resource('faxVirtuals', 'FaxVirtualController');

Route::resource('faxVirtualParams', 'FaxVirtualParamController');

Route::resource('firewalls', 'FirewallController');

Route::resource('fonesAnatels', 'FonesAnatelController');

Route::resource('fonesBloqs', 'FonesBloqController');

Route::resource('fonesProcons', 'FonesProconController');

Route::resource('fonesRestricaos', 'FonesRestricaoController');

Route::resource('fonesUsers', 'FonesUserController');

Route::resource('fornecedors', 'FornecedorController');

Route::resource('grupos', 'GrupoController');

Route::resource('grupoSms', 'GrupoSmsController');

Route::resource('grupoVoips', 'GrupoVoipController');

Route::resource('grupoVoipRamals', 'GrupoVoipRamalController');

Route::resource('grupoUras', 'GrupoUraController');

Route::resource('grupoUraDesvios', 'GrupoUraDesvioController');

Route::resource('gvts', 'GvtController');

Route::resource('ligacaos', 'LigacaoController');

Route::resource('ligOnlines', 'LigOnlineController');

Route::resource('logChamadas', 'LogChamadaController');

Route::resource('logTarifacaos', 'LogTarifacaoController');

Route::resource('naoTarifadoTerms', 'NaoTarifadoTermController');

Route::resource('operadoras', 'OperadoraController');

Route::resource('ordemTerminacaoIas', 'OrdemTerminacaoIaController');

Route::resource('parBoletos', 'ParBoletoController');

Route::resource('parBoletoRevs', 'ParBoletoRevController');

Route::resource('parRevendas', 'ParRevendaController');

Route::resource('pins', 'PinController');

Route::resource('planos', 'PlanoController');

Route::resource('popsReveAssis', 'PopsReveAssiController');

Route::resource('posPagos', 'PosPagoController');

Route::resource('programas', 'ProgramaController');

Route::resource('provedorSms', 'ProvedorSmsController');

Route::resource('publicFones', 'PublicFoneController');

Route::resource('publicidades', 'PublicidadeController');

Route::resource('publicidadeAudios', 'PublicidadeAudioController');

Route::resource('publicidadeParams', 'PublicidadeParamController');

Route::resource('relacaos', 'RelacaoController');

Route::resource('representantes', 'RepresentanteController');

Route::resource('saldoGerals', 'SaldoGeralController');

Route::resource('servers', 'ServerController');

Route::resource('sipBuddies', 'SipBuddieController');

Route::resource('smsCampanhas', 'SmsCampanhaController');

Route::resource('smsCampanhaFones', 'SmsCampanhaFoneController');

Route::resource('tabAssinantes', 'TabAssinanteController');

Route::resource('tabelaReps', 'TabelaRepController');

Route::resource('tabEspAs', 'TabEspAController');

Route::resource('tabEsps', 'TabEspController');

Route::resource('tabRevendas', 'TabRevendaController');

Route::resource('tarifas', 'TarifaController');

Route::resource('taxas', 'TaxaController');

Route::resource('terminacaos', 'TerminacaoController');

Route::resource('tpMenus', 'TpMenuController');

Route::resource('assinantes', 'AssinanteController');

Route::resource('assinanteCancels', 'AssinanteCancelController');

Route::resource('assinanteCancelados', 'AssinanteCanceladoController');

Route::resource('voipToVoips', 'VoipToVoipController');

Route::resource('fornecedores', 'FornecedorController');