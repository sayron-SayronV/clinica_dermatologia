<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

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
    return view('auth.login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

route::get('/add_paciente', function() {
    return view('dash.add_paciente');
});

route::get('/paciente','App\Http\Controllers\PacienteController@index');
route::post('/paciente','App\Http\Controllers\PacienteController@store');
route::get('/paciente/edit/{id}','App\Http\Controllers\PacienteController@edit');
route::put('/paciente/upd/{id}','App\Http\Controllers\PacienteController@update');
route::delete('/paciente/delete/{id}','App\Http\Controllers\PacienteController@destroy');

/*route::get('/paciente/edit/{id}', function() {
    $paciente = $request->get('id');
    $response = Http::get('http://localhost:4000/GetpacientesEnc/{$paciente}');
    dd($response->json());
});


route::get('/add_pacientejj', function() {
    $response = Http::get('http://localhost:4000/GetpacientesEnc/1');
    $pac = $response->json();
    $pacient = $pac[0][0];
    dd($pacient);
    

});*/





