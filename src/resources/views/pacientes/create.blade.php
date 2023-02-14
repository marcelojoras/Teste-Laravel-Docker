<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
</head>
<body>
    <form action="{{ route('registrar_paciente') }}" method="post">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Nome da mãe</label><br>
        <input type="text" name="nome_mae"><br>
        <label for="">Data de nascimento</label><br>
        <input type="date" name="data_nascimento"><br>
        <label for="">CPF</label><br>
        <input type="text" name="cpf"><br>
        <label for="">CNS</label><br>
        <input type="text" name="cns"><br>
        <label for="">Foto</label><br>
        <input type="text" name="foto"><br>
        <label for="">CEP</label><br>
        <input type="text" name="cep"><br>
        <label for="">Endereço</label><br>
        <input type="text" name="endereco"><br>
        <label for="">Número</label><br>
        <input type="text" name="numero"><br>
        <label for="">Complemento</label><br>
        <input type="text" name="complemento"><br>
        <label for="">Bairro</label><br>
        <input type="text" name="bairro"><br>
        <label for="">Cidade</label><br>
        <input type="text" name="cidade"><br>
        <label for="">Estado</label><br>
        <input type="text" name="estado"><br>
        <button>Salvar</button>
    </form>
</body>
</html>