<?php
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADP", true);

var_dump(NOME);

echo "Meu nome é ".NOME.", minha idade é ".IDADE." e minha altura é ".ALTURA.".";

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo "<hr>";

echo TIMES[0];

var_dump(TIMES);

echo "<hr>";

// constantes são globais
function exibeNome() {
    echo NOME;
}
exibeNome();