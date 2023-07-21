<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
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
  PainelGerencialController
};

//  Route::get('/escola/teste',      [PessoaController::class, 'index']);
//  Route::get('/base/base',      [PainelGerencialController::class, 'dashboard']);
Route::get('/inscricao/invoice/{id}',    [ReciboController::class, 'invoice']);
Route::get('/inscricao/dre/edit/{id}',    [ReciboController::class, 'dreedit']);
Route::get('/inscricao/semnotas',        [ReciboController::class, 'semnotas']);
Route::get('/inscricao/semnotas_etapa2',        [ReciboController::class, 'semnotas_etapa2']);
Route::get('/inscricao/desclassificados',        [ReciboController::class, 'desclassificados']);
Route::get('/inscricao/classificados',        [ReciboController::class, 'classificados']);

Route::get('/inscricao/dre/drealtafloresta',    [ReciboController::class, 'drealtafloresta']);
Route::get('/inscricao/dre/drebarradogarcas',    [ReciboController::class, 'drebarradogarcas']);
Route::get('/inscricao/dre/drecaceres',           [ReciboController::class, 'drecaceres']);
Route::get('/inscricao/dre/dreconfresa',    [ReciboController::class, 'dreconfresa']);
Route::get('/inscricao/dre/drecuiaba',    [ReciboController::class, 'drecuiaba']);
Route::get('/inscricao/dre/drevarzeagrande',    [ReciboController::class, 'drevarzeagrande']);
Route::get('/inscricao/dre/drediamantino',    [ReciboController::class, 'drediamantino']);
Route::get('/inscricao/dre/drejuina',    [ReciboController::class, 'drejuina']);
Route::get('/inscricao/dre/drematupa',    [ReciboController::class, 'drematupa']);
Route::get('/inscricao/dre/dreponteselacerda',    [ReciboController::class, 'dreponteselacerda']);
Route::get('/inscricao/dre/dreprimaveradoleste',    [ReciboController::class, 'dreprimaveradoleste']);
Route::get('/inscricao/dre/drerondonopolis',    [ReciboController::class, 'drerondonopolis']);
Route::get('/inscricao/dre/dresinop',    [ReciboController::class, 'dresinop']);
Route::get('/inscricao/dre/dretangaradaserra',    [ReciboController::class, 'dretangaradaserra']);


Route::patch('/inscricao/invoice/{id}',                  [ReciboController::class, 'inscricao_update'])->name('inscricao_update');
Route::get('/inscricao/invoice/disp_site_sim/{id}',      [ReciboController::class, 'disp_site_sim']);
Route::get('/inscricao/invoice/disp_site_nao/{id}',      [ReciboController::class, 'disp_site_nao']);
Route::get('/inscricao/invoice/desclassificar_sim/{id}', [ReciboController::class, 'desclassificar_sim']);
Route::get('/inscricao/invoice/desclassificar_nao/{id}', [ReciboController::class, 'desclassificar_nao']);


Route::get('/inscricao/contrato/{id}',   [ReciboController::class, 'contrato']);
Route::get('/inscricao/avaliar/{id}',    [ReciboController::class, 'avaliar']);


// Route::get('/painel', function () {
//     return view('painel');
// })->middleware(['auth', 'verified'])->name('painel');


Route::resource('roles',                     RoleController::class);
Route::resource('users',                     UserController::class);
Route::resource('pessoa',                    PessoaController::class);
Route::resource('dre',                       DreController::class);
Route::resource('escola',                    EscolaController::class);
Route::resource('estado',                    EstadoController::class);
Route::resource('cidade',                    CidadeController::class);
Route::resource('cat_ingrediente',           Categoria_ingredientesController::class);
Route::resource('catingrediente',            CatingredientesController::class);
Route::resource('insumo',                    InsumoController::class);
Route::resource('inscricao',                 ReciboController::class);

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
