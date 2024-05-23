<?php

session_start(); // Iniciar a sessao

// Definir um fuso horario padrao
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <meta charset="UTF-8">
    <title>Projeto: Registro de Ponto</title>
</head>

<body>
    
<h1>Registrar <span class="underlined underline-clip">Ponto</span><br></h1>



    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>


    <a href="registrar_ponto.php" class="btn btn-white btn-animate">Registrar</a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <span class="underlined underline-overflow">Diego  Sena<br></span>
    <span class="underlined underline-overflow">Robson Moreira<br></span>
    <span class="underlined underline-overflow"><br>Peterson Carvalho</span>
    <h3 class="underlined underline-overflow">UNIVERSIDADE ESTADUAL DO ESTADO DE SÃO PAULO<br></h3>

    <script>
        //var apHorario = document.getElementById("horario");

        function atualizarHorario() {
            var data = new Date().toLocaleString("pt-br", {
                timeZone: "America/Sao_Paulo"
            });
            //var formatarData = data.replace(", ", " - ");
            //apHorario.innerHTML = formatarData; 
            document.getElementById("horario").innerHTML = data.replace(", ", " - ");
        }

        setInterval(atualizarHorario, 1000);
    </script>

</body>

</html>