<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Clinica;
use App\Models\Medico;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    private $especializacoes = [
        'Cardiologia',
        'Dermatologia',
        'Neurologia',
        'Pediatria',
        'Ortopedia',
        'Psiquiatria',
    ];

    public function LoginPaciente(Request $request){

        $nome = $request->input('nome');
        $senha = $request->input('senha');

        $existe = Paciente::where('nomepaciente', $nome)->where('senhapaciente', $senha)->first();

        if($existe){
            return redirect()->route('Homepage');
        }
    return redirect()->route('Paciente_Login_VIEW');

    }

    public function CadastroPaciente(Request $request){

        $paciente = Paciente::create([
            'nomepaciente' => $request->input('nomepac'),
            'senhapaciente' => $request->input('senhapac'),
            'emailpaciente' => $request->input('emailpac'),
        ]);
        return redirect()->route('Paciente_Login_VIEW');
    
    }

    public function formularioCadastro()
    {   
        $clinicas = Clinica::select('nomedaclinica')->get();

        return view('Medico.medico', [
            'clinicas' => $clinicas,
            'especializacoes' =>$this->especializacoes
        ]);
    }

    public function especializacoes()
    {
        return view('Agendamento.telagendamento',[
            'especializacoes'=>$this->especializacoes
        ]);
    }

    public function Consultas()
    {
        $teste = Paciente::select('nomepaciente', 'senhapaciente')->get();

        return view('Homepage.homepage', ['teste'=>$teste]);
    }

    public function CadastroMedico(Request $request)
    {
        $especializacao = $request->input('especializacaomed');

        if ($especializacao === 'outro') {
            $especializacao = $request->input('caixaOutro');
        }

        $medico = Medico::create([
            'nomemedico' => $request->input('nomemed'),
            'senhamedico' => $request->input('senhamed'),
            'especializacaomedico' => $especializacao,
        ]);

        return redirect()->route('Medico_Login_VIEW');
    }

}
