<?php
//use Symfony\Component\Routing\Annotation\Route;

//use Illuminate\Routing\Route;//comentado

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
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
//rota modificada
Route::get('/', 'PagesController@index');
Route::get('/telalogin', 'PagesController@telaLogin');
Route::get('/telaadm', 'PagesController@telaAdm'); 
Route::get('/teste', 'PagesController@Teste'); 
Route::post('/telaPrintTicket', 'ConsultaController@index');
