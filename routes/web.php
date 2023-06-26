<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\
    {
    
    AlunosController, APIController,  PainelGerencialController,
    UsuariosController, RoleController, UserController, ProductController,
    CalendarController, ObjetosController, CatController, SiteController,



// Formulario Master Chefe
    InscricaoController, IngredientesController, Categoria_ingredientesController, CidadeController,
    EstadoController, EscolaController, DreController, PessoaController, CatingredientesController
    ,InsumoController, ProdutoController, ReciboController
  };

 Route::get('/escola/teste',      [PessoaController::class, 'index']);
//  Route::get('/base/base',      [PainelGerencialController::class, 'dashboard']);
Route::get('/inscricao/invoice/{id}',    [ReciboController::class, 'invoice']);
Route::get('/inscricao/contrato/{id}',   [ReciboController::class, 'contrato']);


// Route::get('/painel', function () {
//     return view('painel');
// })->middleware(['auth', 'verified'])->name('painel');


Route::resource('roles',                     RoleController::class);
Route::resource('users',                     UserController::class);
//Route::resource('inscricao',                 InscricaoController::class);
Route::resource('pessoa',                    PessoaController::class);
Route::resource('dre',                       DreController::class);
Route::resource('escola',                    EscolaController::class);
Route::resource('estado',                    EstadoController::class);
Route::resource('cidade',                    CidadeController::class);
Route::resource('cat_ingrediente',           Categoria_ingredientesController::class);
Route::resource('catingrediente',            CatingredientesController::class);
Route::resource('insumo',                    InsumoController::class);
Route::resource('produto',                   ProdutoController::class);
Route::resource('inscricao',                 ReciboController::class);




Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');


Route::middleware('auth')->group(function () {

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
    


/// API
Route::get('/API/CEP/',   [APIController::class, 'cep']);
Route::get('/API/CNPJ/',  [APIController::class, 'cnpj']);
Route::get('/API/FILMES/',[APIController::class, 'filmes']);




////// PAINEL GERENCIAL (DASHBOARD)
Route::get('/painel', [PainelGerencialController::class, 'dashboard']);

Route::get('/painel/index', [PainelGerencialController::class, 'index']);
Route::get('/painel/cadastro/index',  [PainelGerencialController::class, 'cadastro_menu']);
Route::get('/painel/consulta_ficha',  [PainelGerencialController::class, 'consulta_ficha']);
Route::get('/painel/consulta_aluno',  [AlunosController::class, 'search']);
Route::post('/painel/consulta_aluno/', [AlunosController::class, 'search']);

Route::get('/painel/cadastro/cadastro_aluno',      [PainelGerencialController::class, 'cadastro_aluno']);
Route::get('/painel/cadastro/cadastro_conselho',   [PainelGerencialController::class, 'cadastro_conselho']);
Route::get('/painel/cadastro/cadastro_escola',     [PainelGerencialController::class, 'cadastro_escola']);
Route::get('/painel/cadastro/cadastro_ministerio', [PainelGerencialController::class, 'cadastro_ministerio']);
Route::get('/painel/cadastro/cadastro_polo',       [PainelGerencialController::class, 'cadastro_polo']);
Route::get('/painel/cadastro/cadastro_prazo',      [PainelGerencialController::class, 'cadastro_prazo']);
Route::get('/painel/cadastro/cadastro_serie',      [PainelGerencialController::class, 'cadastro_serie']);


Route::get('/usuarios/atribuir_perfil_usuarios',      [RoleController::class, 'atribuir_perfil_usuarios']);


Route::get('/usuarios/perfil_usuarios',               [RoleController::class, 'perfil_usuarios']);
Route::get('/usuarios/form_usuarios',                 [UsuariosController::class, 'form_usuarios']);







    
      Route::get('google', [Ficha_Conselho::class, 'google']);

      Route::get('ficha_conselho/{id}', [Ficha_Conselho::class, 'create']);
      Route::post('ficha_conselho/{id}', [Ficha_Conselho::class, 'store']);

      
      
    Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
    Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
    Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');  

//Route::resource('usuarios', UserController::class);


// ---------USUARIOS POST
// Route::post('/usuarios/atribuir_perfil',              [UsuariosController::class, 'atribuir_perfil_usuarios_store']);
// Route::post('/usuarios',                              [UsuariosController::class, 'store_usuarios']);

/////LOGOUT
// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/Objetos/piano',                 [ObjetosController::class, 'piano']);
Route::get('/Objetos/teclado1',                 [ObjetosController::class, 'teclado']);
Route::get('/Objetos/teclado2',                 [ObjetosController::class, 'teclado2']);
Route::get('/Escolas/index',                 [ObjetosController::class, 'Escolas']);




Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

});


Route::get('/Site',                 [SiteController::class, 'index']);
Route::get('/formulario',           [ReciboController::class, 'formulario'])->name('incricao.formulario');

require __DIR__.'/auth.php';
