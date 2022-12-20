<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

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

Route::get('/', [PrincipalController::class, 'Principal'])->name('site.index');

Route::get('/sobre-nos', [PrincipalController::class, 'SobreNos'])->name('site.sobrenos');;

Route::get('/contato', [PrincipalController::class, 'Contato'])->name('site.contato');;


Route::get('/login', function(){return 'Login'; })->name('site.login');;

Route::prefix('/app')->group( function() {

    Route::get('/', function(){return 'APP Index'; });
    Route::get('/clientes', function(){return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::get('/produtos', function(){return 'Produtos'; })->name('app.produtos');

});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

/*
Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
*/

Route::fallback( function(){
    echo 'Página não encontrada';
    echo '<br>';
    echo '<a href="'.route('site.index').'">Voltar</a>';
});

//Route::redirect('/rota2', '/rota1', 301);


/*
Route::get('/contato/{nome}/{categoria_id}/',
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1
    ){
        echo 'Nome: '. $nome;
        echo 'Categoria_id: '. $categoria_id;
    }
    )->where('categoria_id', '[0-9]+', 'nome', '[^a-zA-Z]');
*/

/*
Route::get('/', function () {
    return 'Olá seja bem vindo ao APP!';
});

Route::get('/sobre-nos', function () {
    return 'Sobre Nós';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/
