<?php
/* Escalares */
// string
$nome = "Olá, mundo!";
var_dump($nome);
if (is_string($nome)):
    echo "É uma string<br>";
else:
    echo "Não é uma string<br>";
endif;

echo "<hr>";

// int
$idade = 27;
var_dump($idade);
if (is_int($idade)):
    echo "É um inteiro<br>";
else:
    echo "Não é um inteiro<br>";
endif;

echo "<hr>";

// float
$altura = 1.77;
var_dump($altura);
if (is_float($altura)):
    echo "É um float<br>";
else:
    echo "Não é um float<br>";
endif;

echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)):
    echo "É um booleano<br>";
else:
    echo "Não é um booleano<br>";
endif;

echo "<hr>";

/* Compostos */
// array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if (is_array($carros)):
    echo "É um array<br>";
else:
    echo "Não é um array<br>";
endif;

echo "<hr>";

// object
class Cliente {
    public $nome;
    public function atribuirNome ($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);

if (is_object($cliente)):
    echo "É um objeto<br>";
else:
    echo "Não é um objeto<br>";
endif;

echo "<hr>";

/* Especiais */
// NULL
$cidade = NULL;
var_dump($cidade);

// resource

/*

gettype() - Retorna o tipo da variável.
var_dump() – Retorna o tipo e o valor.

is_int() – Verifica se a variável em questão é do tipo integer.
is_bool() – Verifica se a variável em questão é do tipo boolean.
is_numeric() – Verifica se a variável em questão é uma string numérica, ex "100".
is_string() – Verifica se a variável em questão é do tipo string.
is_float() – Verifica se a variável em questão é do tipo flutuante.
is_array() – Verifica se a variável em questão é do tipo Array.
is_object() – Verifica se a variável em questão é do tipo objeto.

*/