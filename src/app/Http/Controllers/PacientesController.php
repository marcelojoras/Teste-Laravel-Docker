<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Endereco;
use Illuminate\Support\Facades\Http;

class PacientesController extends Controller
{
    public function home() {
        $pacientes = Paciente::all()->toArray();

        return view('pacientes.home', ['pacientes' => $pacientes]);
    }

    public function create() {
        return view('pacientes.create');
    }

    public function store(Request $request) {
        $request->validade([
            'nome' => 'required|max:255',
            'nome_mae' => 'required|max:255',
            'data_nascimento' => 'required',
            'cpf' => 'required|max:11|min:11',
            'cns' => 'required|max:15|min:15',
            'cep' => 'required|max:8|min:8',
            'endereco' => 'required',
            'numero' => 'required',
            'complemento' => 'nullable',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required|max:2'
        ]);

        $endereco = Endereco::create([
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado
        ]);

        Paciente::create([
            'nome' => $request->nome,
            'nome_mae' => $request->nome_mae,
            'data_nascimento' => $request->data_nascimento,
            'cpf' => $request->cpf,
            'cns' => $request->cns,
            'foto' => $request->foto,
            'endereco_id' => $endereco->id
        ]);

        $pacientes = Paciente::all()->toArray();

        return view('pacientes.home', ['pacientes' => $pacientes]);
    }

    public function show($id) {
        $paciente = Paciente::findOrFail($id);
        $endereco = Endereco::findOrFail($paciente->endereco_id);
        return view('pacientes.show', ['paciente' => $paciente, 'endereco' => $endereco]);
    }

    public function edit($id) {
        $paciente = Paciente::findOrFail($id);
        $endereco = Endereco::findOrFail($paciente->endereco_id);
        return view('pacientes.edit', ['paciente' => $paciente, 'endereco' => $endereco]);
    }

    public function update(Request $request, $id) {
        $request->validade([
            'nome' => 'required|max:255',
            'nome_mae' => 'required|max:255',
            'data_nascimento' => 'required',
            'cpf' => 'required|max:11|min:11',
            'cns' => 'required|max:15|min:15',
            'cep' => 'required|max:8|min:8',
            'endereco' => 'required',
            'numero' => 'required',
            'complemento' => 'nullable',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required|max:2'
        ]);

        $paciente = Paciente::findOrFail($id);

        $paciente->update([
            'nome' => $request->nome,
            'nome_mae' => $request->nome_mae,
            'data_nascimento' => $request->data_nascimento,
            'cpf' => $request->cpf,
            'cns' => $request->cns,
            'foto' => $request->foto,
            'endereco_id' => $request->endereco_id
        ]);

        $endereco = Endereco::findOrFail($paciente->endereco_id);

        $endereco->update([
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado
        ]);

        $pacientes = Paciente::all()->toArray();

        return view('pacientes.home', ['pacientes' => $pacientes]);
    }

    public function delete($id) {
        $paciente = Paciente::findOrFail($id);
        $endereco = Endereco::findOrFail($paciente->endereco_id);

        $paciente->delete();
        $endereco->delete();

        $pacientes = Paciente::all()->toArray();

        return view('pacientes.home', ['pacientes' => $pacientes]);
    }

    public function consultaCep($cep) {
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json');

        return $response;
    }
}
