<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
</head>
<body>
    <form action="{{ route('alterar_paciente', ['id' => $paciente->id]) }}" method="post">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome" value="{{ $paciente->nome }}"><br>
        <label for="">Nome da mãe</label><br>
        <input type="text" name="nome_mae" value="{{ $paciente->nome_mae }}"><br>
        <label for="">Data de nascimento</label><br>
        <input type="date" name="data_nascimento" value="{{ $paciente->data_nascimento }}"><br>
        <label for="">CPF</label><br>
        <input type="text" name="cpf" value="{{ $paciente->cpf }}"><br>
        <label for="">CNS</label><br>
        <input type="text" name="cns" value="{{ $paciente->cns }}"><br>
        <label for="">Foto</label><br>
        <input type="text" name="foto" value="{{ $paciente->foto }}"><br>
        <label for="">Endereco ID</label><br>
        <input type="number" name="endereco_id" value="{{ $paciente->endereco_id }}"><br>
        <button>Salvar</button>
    </form>
</body>
</html>