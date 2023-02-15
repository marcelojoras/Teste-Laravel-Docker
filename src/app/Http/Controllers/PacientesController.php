<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Endereco;

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
}
