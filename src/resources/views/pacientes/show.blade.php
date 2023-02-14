<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Paciente</title>
</head>
<body>
        <label for="">Nome</label><br>
        {{ $paciente->nome }}<br><br>
        <label for="">Nome da mãe</label><br>
        {{ $paciente->nome_mae }}<br><br>
        <label for="">Data de nascimento</label><br>
        {{ $paciente->data_nascimento }}<br><br>
        <label for="">CPF</label><br>
        {{ $paciente->cpf }}<br><br>
        <label for="">CNS</label><br>
        {{ $paciente->cns }}<br><br>
        <label for="">Foto</label><br>
        {{ $paciente->foto }}<br><br>
        <label for="">Endereco ID</label><br>
        {{ $paciente->endereco_id }}<br><br>
</body>
</html>