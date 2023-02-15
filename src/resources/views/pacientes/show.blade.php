<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Paciente</title>
    <style>
        label {
            font-family: arial, sans-serif;
            font-weight: bold;
        }

        p {
            font-family: arial, sans-serif;
        }
    </style>
</head>
<body>
    <label for="">Nome</label><br>
    <p>{{ $paciente->nome }}</p><br>
    <label for="">Nome da mãe</label><br>
    <p>{{ $paciente->nome_mae }}</p><br>
    <label for="">Data de nascimento</label><br>
    <p>{{ $paciente->data_nascimento }}</p><br>
    <label for="">CPF</label><br>
    <p>{{ $paciente->cpf }}</p><br>
    <label for="">CNS</label><br>
    <p>{{ $paciente->cns }}</p><br>
    <label for="">Foto</label><br>
    <p>{{ $paciente->foto }}</p><br>
    <label for="">CEP</label><br>
    <p>{{ $endereco->cep }}</p><br>
    <label for="">Endereço</label><br>
    <p>{{ $endereco->endereco }}</p><br>
    <label for="">Número</label><br>
    <p>{{ $endereco->numero }}</p><br>
    <label for="">Complemento</label><br>
    <p>{{ $endereco->complemento }}</p><br>
    <label for="">Bairro</label><br>
    <p>{{ $endereco->bairro }}</p><br>
    <label for="">Cidade</label><br>
    <p>{{ $endereco->cidade }}</p><br>
    <label for="">Estado</label><br>
    <p>{{ $endereco->estado }}</p><br>
</body>
</html>