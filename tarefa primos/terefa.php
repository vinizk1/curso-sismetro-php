<?php

    function numPrimo($posicao){
        $primos = array(2);

        $n = 3;
        while(count($primos) < $posicao){
            $e_primo = true;
            foreach($primos as $primo){
                if($n%$primo == 0){
                    $e_primo = false;
                }
            }
            if($e_primo){
                $primos[] = $n;
            }
            $n++;
        }
        return $primos[$posicao - 1];
    }

?>

<style>
    body{
        background-image: url(https://img1.picmix.com/output/pic/normal/2/1/8/7/10897812_b053a.gif);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .gif{
        text-align: center;
    }
</style>




<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
</br>
</br>
    <h1 style="text-align: center;">Bão dia</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="row">
        <div class="col-4 offset-4">


            

                <h2 style="text-align: center; color:black">RESULTADO</h2>
                <div class="row">
                    <div class="col-2 offset-3 text-center">
                        <p style="color:black">Posição
                        </p>
                    </div>
                    <div class="col-5 text-center">
                        <p style="color:black">Valor
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
                        <p><?php echo numPrimo($_POST["posicao"]); ?>  </p>
                    </div>
                </div>

                <?php
            }
?>

                <form method="POST">

                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="color:black">Posição</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" name="posicao" placeholder="Posição dos numeros primos">
                        </div>
                        <div class="col-4 offset 6">
                            <button type="submit" class="btn btn-success">Enviar!</button>
                        </div>
                    </form>
        </div>
    </div>

<div class="gif">
    <img src="https://img1.picmix.com/output/pic/normal/2/1/8/7/10897812_b053a.gif">
</div>









</body>

</html>