<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function buscarPorNome(Request $request){

        $nome = $request->input('nome');
        $senha = $request->input('senha');

        $existe = Paciente::where('nomepaciente', $nome)->where('senhapaciente', $senha)->exists();

        if ($existe){
            // Aqui você pode retornar alguma view ou resposta
            return redirect()->route('hmp');
        } else {
            return redirect()->route('Login');
        }
    }

    public function cadastropaciente(Request $request){

        $paciente = Paciente::create([
            'nomepaciente' => $request->input('nomepac'),
            'senhapaciente' => $request->input('senhapac'),
            'emailpaciente' => $request->input('emailpac'),
            'telefonepaciente' => $request->input('telefonepac'),
            'datanascimentopaciente' => $request->input('datanascimentopac'),
            'cpfpaciente' => $request ->input('cpfpac'),
            'ceppaciente' => $request ->input('ceppac'),
            'bairropaciente' => $request ->input('bairropac')
        ]);
    return redirect()->resource('Login');
    
    }

    public function formularioCadastro()
    {
        $especializacoes = [
            'Cardiologia',
            'Dermatologia',
            'Neurologia',
            'Pediatria',
            'Ortopedia',
            'Psiquiatria',
        ];

        return view('Medico', compact('especializacoes'));
    }
}
