<?php
$carro1 = "BMW";
$carro2 = "Veloster";
$carro3 = "Hilux";

// Arrays
$carros = array("BMW", "Veloster", "Hilux");
echo $carros;

echo "<br>";

// para exibir um array temos uma função expecífica, o print_r
print_r($carros);

echo "<br>";

echo $carros[0];

echo "<br>";

// por padrão o índice começa pelo 0 mas você pode criar os seus índices
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
echo $carros[2];

echo "<br>";

// inserindo elementos no array
$carros[] = "Amarok";
print_r($carros);

echo "<br>";

$carros[10] = "Camaro";
print_r($carros);

echo "<br>";

// criando arrays de outra maneira
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);

echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);

echo "<hr>";

// exibindo quantidade de elementos no array
echo count($clientes);
echo "<br>";
$totalClientes = count($clientes);
echo "O total de clientes é $totalClientes";

echo "<br>";
echo "<br>";

// criando loop para percorrer arrays usando foreach
foreach($carros as $valor) {
    echo "$valor<br>";
};

echo "<hr>";

// arrays associativos (quandos o índices ou chaves são strings)
$pessoa = array("nome"=>"Rodrigo", "idade"=>23, "altura"=>1.75);
echo "Meu nome é ".$pessoa["nome"].", tenho ".$pessoa["idade"]." anos, e ".$pessoa["altura"]." de altura.";
$pessoa["cidade"] = "Itabuna";
echo "<br> Meu nome é ".$pessoa["nome"].", tenho ".$pessoa["idade"]." anos, e ".$pessoa["altura"]." de altura e moro em ".$pessoa["cidade"].".";

foreach ($pessoa as $indice => $valor) {
    echo "<br>".$indice.":".$valor;
};

echo "<br>";
echo "<br>";

// arrays multidimencionais
$times = array(
        "cariocas"=>array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
        "paulistas"=>array("santos", "são paulo", "palmeiras"),
        "baianos"=>array("bahia", "vitória", "itabuna")
);

echo $times["paulistas"][1];
echo "<br>";
foreach ($times["cariocas"] as $indice => $valor) {
    echo "<br>".$indice." - ".$valor;
};