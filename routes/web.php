<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Models\Trdigital;
use App\Http\Controllers\{

  APIController,
  RoleController,
  UserController,
  CalendarController,
  ObjetosController,
  SiteController,

  // Formulario Master Chefe
  Categoria_ingredientesController,
  CidadeController,
  EstadoController,
  EscolaController,
  DreController,
  PessoaController,
  CatingredientesController,
  InsumoController,
  ReciboController,
  PainelGerencialController,

  // TR GITIAL

  TrdigitalController,   QuestoesController, MetasController
};


Route::patch('/trdigital/metasstore/{id}',  [TrdigitalController::class, 'metasstore'])->name('trdigital.metasstore');
Route::delete('/trdigital/metasstore/{id}', [TrdigitalController::class, 'metasstoredestroy'])->name('trdigital.metasstoredestroy');
Route::put('/trdigital/metasstore/{id}',    [TrdigitalController::class, 'metasupdate'])->name('trdigital.metasupdate');


Route::put('/trdigital/etapasstore/{id}',    [TrdigitalController::class, 'etapaupdate'])->name('trdigital.etapaupdate');
Route::patch('/trdigital/etapasstore/{id}', [TrdigitalController::class, 'etapasstore'])->name('trdigital.etapasstore');

Route::patch('/trdigital/planoconsolidado/{id}',  [TrdigitalController::class, 'planoconsolidado'])->name('trdigital.planoconsolidado');
Route::put('/trdigital/planoconsolidado/{id}',  [TrdigitalController::class, 'planoconsolidadoupdate'])->name('trdigital.planoconsolidadoupdate');
Route::delete('/trdigital/planoconsolidado/{id}',  [TrdigitalController::class, 'planoconsolidadodestroy'])->name('trdigital.planoconsolidadodestroy');

Route::delete('/trdigital/etapasstore/{id}', [TrdigitalController::class, 'etapasstoredestroy'])->name('trdigital.etapasstoredestroy');

// Route::post('trdigital/metasstore/{id}', [MetasController::class, 'metasstore'])->name('metasstore');

Route::get('/trdigital/proponente',   [TrdigitalController::class, 'proponente']);


Route::get('/trdigital/validar/{id}',     [TrdigitalController::class, 'validar']);
Route::post('/trdigital/validar/oficio/{id}',    [TrdigitalController::class, 'oficio'])->name('trdigital.validar.oficio');
Route::post('/trdigital/validar/resp_instituicao/{id}',    [TrdigitalController::class, 'resp_instituicao'])->name('trdigital.validar.resp_instituicao');
Route::post('/trdigital/validar/instituicao/{id}',    [TrdigitalController::class, 'instituicao'])->name('trdigital.validar.instituicao');
Route::post('/trdigital/validar/resp_projeto/{id}',    [TrdigitalController::class, 'resp_projeto'])->name('trdigital.validar.resp_projeto');
Route::post('/trdigital/validar/documentos/{id}',    [TrdigitalController::class, 'documentos'])->name('trdigital.validar.documentos');
Route::post('/trdigital/validar/projeto/{id}',    [TrdigitalController::class, 'projeto'])->name('trdigital.validar.projeto');

Route::get('/trdigital/corrigir/{id}',      [TrdigitalController::class, 'corrigir']);
Route::get('/trdigital/aguardando_andamento/{id}',      [TrdigitalController::class, 'aguardando_andamento']);
Route::get('/trdigital/finalizado/{id}',      [TrdigitalController::class, 'finalizado']);

// Route::get('/trdigital/validar/ava/{id}',     [TrdigitalController::class, 'avaliar_update']);


Route::post('/salvar_resp_instituicao/{id}', 'SuaController@salvarRespInstituicao')->name('salvar_resp_instituicao');


//  Route::post('/trdigital/avaliar_update/{id}', 'TrdigitalController@avaliar_update')->name('avaliar_update');


// Route::get('/painel', function () {
//     return view('painel');
// })->middleware(['auth', 'verified'])->name('painel');


Route::resource('roles',                     RoleController::class);
Route::resource('users',                     UserController::class);
Route::resource('pessoa',                    PessoaController::class);
Route::resource('dre',                       DreController::class);
Route::resource('questoes',                  QuestoesController::class);
Route::resource('estado',                    EstadoController::class);
Route::resource('cidade',                    CidadeController::class);
Route::resource('cat_ingrediente',           Categoria_ingredientesController::class);
Route::resource('catingrediente',            CatingredientesController::class);
Route::resource('insumo',                    InsumoController::class);
Route::resource('inscricao',                 ReciboController::class);
Route::resource('trdigital',                 TrdigitalController::class);

////// PAINEL GERENCIAL (DASHBOARD)
Route::get('/painel', [PainelGerencialController::class, 'dashboard']);

Route::get('/painel/index', [PainelGerencialController::class, 'index']);


Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/perfil', [ProfileController::class, 'index'])->name('profile.index');

Route::middleware('auth')->group(function () {

  Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



  Route::get('google', [Ficha_Conselho::class, 'google']);


  // CALENDARIO - AGENDA

  Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
  Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
  Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
  Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');

  /// API
  Route::get('/API/CEP/',   [APIController::class, 'cep']);
  Route::get('/API/CNPJ/',  [APIController::class, 'cnpj']);
  Route::get('/API/FILMES/', [APIController::class, 'filmes']);


  // Objetos de 
  Route::get('/Objetos/piano',                 [ObjetosController::class, 'piano']);
  Route::get('/Objetos/teclado1',              [ObjetosController::class, 'teclado']);
  Route::get('/Objetos/teclado2',              [ObjetosController::class, 'teclado2']);
  Route::get('/Escolas/index',                 [ObjetosController::class, 'Escolas']);
  Route::get('/suporte',                       [ObjetosController::class, 'suporte']);



  // SAIR - LOGOUT
  Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
});

// ROTAS DE ACESSO PÚBLICO
//Route::post('/Site',           [SiteController::class, 'store_formulario']);
Route::post('/Site', 'SiteController@store')->name('Site.store');
Route::get('/Site',                       [SiteController::class, 'index']);
Route::get('/site/voto/{id}',             [SiteController::class, 'voto']);
Route::get('/site/retiravoto/{id}',       [SiteController::class, 'retiravoto']);
//Route::get('/Site/formulario',            [SiteController::class, 'formulario']);
Route::get('/Site/formulario', [SiteController::class, 'formulario'])->name('Site.formulario');
Route::get('/Site/formulario2', [SiteController::class, 'formulario2'])->name('Site.formulario2');
Route::post('/Site/formulario', [SiteController::class, 'store_formulario'])->name('Site.store_formulario');
Route::get('site',                        [SiteController::class, 'index'])->name('recibos.index');
Route::post('site/{recibo}/vote',         [SiteController::class, 'vote'])->name('site.vote');

require __DIR__ . '/auth.php';
