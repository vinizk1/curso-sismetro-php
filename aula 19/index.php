<?php

$lista = array(
array("Banco de dados", 7),
array("Analise de sistemas", 6),
array("Ciencias da computação", 9),
array("Front end", 8),
array("P. mobile", 9),
array("Portugues", 6),
array("Matematica", 7),
array("Historia", 7),
array("Geografia", 7),
array("Quimica", 5),
array("Biologia", 7),
array("Sociologia", 10),
array("Projeto de vida", 10),
array("Educação Financeira", 8),
);

foreach ($lista as $lista) {
    echo $lista[0]."-".$lista[1]."<br/>";
}


?>