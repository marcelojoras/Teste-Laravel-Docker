<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de pacientes</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        button {
            color: white;
            border: none;
            cursor: pointer;
            min-width: 60px;
            height: 25px;
            font-family: sans-serif;
            font-weight: bold;
        }

        button:hover {
            opacity: 0.8;
        }

        .editar {
            background: #547df1;
        }

        .excluir {
            background: red;
        }

        .adicionar {
            background: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Pacientes do sistema</h1>
    <a href="{{ route('criar_paciente') }}"><button class="adicionar">Adicionar paciente</button></a>
    <br>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>CNS</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <?php 
            foreach($pacientes as $paciente) {
                ?>
                    <tr>
                        <td>{{$paciente['nome']}}</td>
                        <td>{{$paciente['cpf']}}</td>
                        <td>{{$paciente['cns']}}</td>
                        <td><a href="{{ route('ver_paciente', ['id' => $paciente['id']]) }}"><button class="editar">Ver</button></a></td>
                        <td><a href="{{ route('editar_paciente', ['id' => $paciente['id']]) }}"><button class="editar">Editar</button></a></td>
                        <td><a href="{{ route('excluir_paciente', ['id' => $paciente['id']]) }}"><button class="excluir">Excluir</button></a></td>
                    </tr>
                <?php
            } 
        ?>
    </table>
</body>
</html>