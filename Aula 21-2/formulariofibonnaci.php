<?php

function fibonacci($p)
{
    $sequencia = array();
    $sequencia[0] = 1;
    $sequencia[1] = 1;

    for ($i = 2; $i < $p; $i++) {
        $sequencia[$i] = $sequencia[$i - 1] + $sequencia[$i - 2];
    }

    return $sequencia[$p - 1];
}

?>






<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: rgb(26,255,0);
background: linear-gradient(90deg, rgba(26,255,0,1) 15%, rgba(255,249,0,1) 53%, rgba(221,9,80,1) 100%);">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <h1 style="text-align: center;">Bão dia</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="row">
        <div class="col-4 offset-4">


            

                <h2 style="text-align: center;">RESULTADO</h2>
                <div class="row">
                    <div class="col-2 offset-3 text-center">
                        <p>Posição
                        </p>
                    </div>
                    <div class="col-5 text-center">
                        <p>Valor
                        </p>
                    </div>
                </div>
                
                <?php
            if (isset($_POST["posicao"])) {



            ?>
                <div class="row">
                    <div class="col-2 offset-3 text-center">
                        <p><?php echo $_POST["posicao"]; ?>  </p>
                    </div>
                    <div class="col-5 text-center">
                        <p><?php echo fibonacci($_POST["posicao"]); ?>  </p>
                    </div>
                </div>

                <?php
            }
?>

                <form method="POST">

                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="color: white">Posição</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" name="posicao" placeholder="Posição da sequência de fibonacci">
                        </div>
                        <div class="col-4 offset 6">
                            <button type="submit" class="btn btn-success">Enviar!</button>
                        </div>
                    </form>
        </div>
    </div>











</body>

</html>