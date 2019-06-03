<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Turma;
use DB;
class HorarioController extends Controller
{
    public function index($id = null)
    {        
        $turmas = Turma::all();
        $dias = Horario::all();
        
       
        
        $horarios =  DB::table('horarios')
            ->join('turmas', 'horarios.turmas_id', 'turmas.id')  
            ->join('materias', 'horarios.materias_id', 'materias.id')   
            ->select('horarios.id','horarios.dia','horarios.ordem_aula','horarios.professores_id', 'horarios.turmas_id',
            'turmas.nome as nome', 'turmas.periodo as periodo', 'materias.nome as materia')       
            ->get();


        if ($id)
        {    
            $horarioId = Horario::find($id);
            return view('horarios',compact('horarioId','horarios','turmas'));                    
        } 
        else
        {
            return view('horarios',compact('horarios','turmas'));            
        }

    }

    public function cadastrar(Request $request)
    {
        $horarios = $request->all();
        Horario::create($horarios);
        return redirect()->route('horarios');
    }

    public function atualizar(Request $request, $id)
    {
        $horarios = $request->all();
        Horario::find($id)->update($horarios);
        return redirect()->route('horarios');
        
    }

    public function deletar($id)
    {
        Horario::destroy($id);
        return redirect()->route('horarios');
    }
    
}
