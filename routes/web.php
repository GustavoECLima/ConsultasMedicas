<?php

use App\Http\Controllers\PacienteController;

Route::get('/cadastro', function(){
    return view('Paciente.paciente');
})->name('Paciente');

Route::get('/agendamento', function(){
    return view('Agendamento.telagendamento');
})->name('agd');

Route::get('/', function () {
    return view('Inicio.inicio');
})->name('Inicio');

Route::get('/login', function () {
    return view('Login.login');
})->name('Login');

Route::get('/loginM', function () {
    return view('MedLogin.MedLogin');
})->name('MedLogin');

Route::get('/medico', function () {
    return view('Medico.medico');
})->name('Medico');

Route::get('/homepage', function () {
    return view('Homepage.homepage');
})->name('hmp');

Route::get('/validar',[PacienteController::class, 'buscarPorNome'])->name('Validator');
Route::get('/tentando',[PacienteController::class, 'cadastropaciente'])->name('cadastro');