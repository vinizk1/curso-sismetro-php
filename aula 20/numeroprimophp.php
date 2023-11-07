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

    echo numPrimo($_GET["posicao"]);
?>