<?php

use App\Http\Controllers\PacienteController;

Route::get('/Paciente', function(){
    return view('Paciente.paciente');
})->name('Paciente_Cadastro_VIEW');

Route::get('/agendamento', [PacienteController::class, 'especializacoes'])->name('agd');

Route::get('/', function () {
    return view('Inicio.inicio');
})->name('Inicio_VIEW');

Route::get('/login', function () {
    return view('Login.login');
})->name('Paciente_Login_VIEW');

Route::get('/loginM', function () {
    return view('MedLogin.MedLogin');
})->name('Medico_Login_VIEW');

Route::get('/Medico',[PacienteController::class, 'formularioCadastro'])->name('Medico_Cadastro_VIEW');
Route::get('/Dashboard', [PacienteController::class, 'Consultas'])->name('Homepage');
Route::post('/LoginCtrl',[PacienteController::class, 'LoginPaciente'])->name('Paciente_Login_ROTA');
Route::post('/Login',[PacienteController::class, 'LoginMedico'])->name('Medico_Login_ROTA');
Route::post('/Paciente',[PacienteController::class, 'CadastroPaciente'])->name('Paciente_Cadastro_ROTA');
Route::post('/Medico',[PacienteController::class, 'CadastroMedico'])->name('Medico_Cadastro_ROTA');