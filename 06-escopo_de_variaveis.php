<?php
$nome = "Rodrigo Oliveira"; // variável definida no escopo global

function exibeNome() {
    global $nome; // define a variável local com global
    echo $nome; // variável definida em escopo local, mas que foi definida como global
}
exibeNome();

echo "<hr>";

function exibeCidade() {
    global $cidade;
    $cidade = "Rio de Janeiro";
}
exibeCidade();

echo $cidade;

echo "<hr>";

$a = 1;
$b = 3;
$c = 7;

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();