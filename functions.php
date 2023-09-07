<?php
function soma($x, $y)
{
    return $x + $y;
}

function upNome($nome)
{
    return strtoupper($nome);
}

function downNome($nome)
{
    return strtolower($nome);
}

function primeCharUpper($nome)
{
    return ucfirst($nome);
}

function allChaUpper($nome)
{
    return ucwords($nome);
}


$nomes = [
    'raimundo', 
    'marques', 
    'de', 
    'freitas', 
    'filho'
];

function arrNomes($arr){
    return $arr;
}

function pessoa($nome, $idade, $genero){
    echo "Olá, eu sou $genero $nome e tenho $idade anos<br>";
}

$num1 = 8;
$num2 = 7;
$num3 = 17;


function parImpar($n){
    echo 'Esta função verifica se um número é par ou ímpar<br>';

    if($n % 2 === 0){
        echo "O número $n é par";
    }else{
        echo "O número $n é ímpar";
    }
}