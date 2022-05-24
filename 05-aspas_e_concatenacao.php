<?php
$nome = 'Rodrigo Oliveira';
echo $nome;
echo "<br>";
echo 'Meu nome é $nome';
echo "<br>";
// Aspas simples mostram  o que é literal, variáveis não são interpretadas
echo 'Meu nome é ' . $nome . ' e minha idade é \'23\'.';

echo "<hr>";

echo "Meu nome é \"$nome\"";