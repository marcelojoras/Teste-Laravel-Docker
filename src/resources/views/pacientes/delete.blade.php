<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Paciente</title>
</head>
<body>
    <form action="{{ route('excluir_paciente', ['id' => $paciente->id]) }}" method="post">
        @csrf
        <label for="">Tem certeza que deseja excluir {{ $paciente->nome }}?</label><br>
        <button>Sim</button>
    </form>
</body>
</html>