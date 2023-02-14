<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de pacientes</title>
</head>
<body>
    <h1>Pacientes do sistema</h1>
    <ul>
        <?php 
            foreach($pacientes as $paciente) {
                ?>
                    <li>{{$paciente['nome']}}</li>
                <?php
            } 
        ?>
    </ul>
</body>
</html>