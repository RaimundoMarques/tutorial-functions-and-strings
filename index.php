<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estudo PHP - Functions e Strings</title>
</head>

<body>
    <h2>Funções e Strings emm PHP</h2>

    <?php
    include_once 'functions.php';
    $n1 = 35;
    $n2 = 12;
    echo "N1 = $n1 </br> N2 = $n2</br>";
    $nome = 'raimundo marques de freitas filho';
    ?>

    <p>Soma dos números: <?= soma($n1, $n2) ?></p>
    <hr>

    <p>Nome com caixa alta: <strong><?= upNome($nome) ?></strong></p>
    <p>Nome com caixa baixa: <strong><?= downNome($nome) ?></strong></p>
    <hr>
    <p>Caixa alta na primeira letra: <strong><?= primeCharUpper($nome) ?></strong></p>
    <p>Caixa alta nas primeiras letras de cada palavra: <strong><?= allChaUpper($nome) ?></strong></p>
    <hr>



    <h4>Passando arrays por parâmetro em funções</h4>
    <pre>
    <?= var_dump(arrNomes($nomes)); ?>
    </pre>

    <?php foreach ($nomes as $nome) : ?>
        <ul>
            <li><?= $nome ?></li>
        </ul>
    <?php endforeach; ?>


    <h4>Imprimir array com função 'implode' do PHP</h4>
    <?= implode(", ", $nomes)  //Imprimindo dados do array separados por vírgula
    ?><br>
    <?= implode("-", $nomes)  //Imprimindo dados do array separados por hífem
    ?>



    <h4>Exercício 33</h4>
    <ul>
        <li>Crie uma função que recebe 2 parâmetros: nome e idade</li>
        <li>Imprima "Olá, eu sou o NOME e tenho IDADE anos</li>
    </ul>

    <?php
    $myName = 'Aslan Levi da Paixão Marques';
    $myIdade = 35;

    pessoa($myName, $myIdade, 'o');

    $myName = 'Maria da Silva Bairro da Paz';
    $myIdade = 18;

    pessoa($myName, $myIdade, 'a');
    ?>
    <hr>
    <h4>Exercício 34</h4>
    <p>Verificar se um número é par ou ímpar</p>
    <?= parImpar($num3) ?>


    <hr>

    <h4>Exercícios Curso em vídeo - Funções</h4>
    <div class="container">
        <ul>
            <li id="title-li">Função printf</li>
            <li>
                <fieldset>
                    <?php
                    $p = "Leite";
                    $pr = 4.5;
                    printf("O %s custa R$ %.2f", $p, $pr);
                    ?>
                </fieldset>
            </li>
            <li>%d para valor decimal</li>
            <li>%u valor decimal sem sinal (apenas positivo)</li>
            <li>%f valor real</li>
            <li>%s para string</li>
            <li id="title-li">Funções print_r() | var_dump() | var_export()</li>
            <li>print_r()
                <fieldset>
                    <pre>
                <?php
                $x = [1, 5, 9, 8, 7, 4, 6, 3];
                print_r($x);
                ?>
                </pre>
                </fieldset>
            </li>
            <li>var_dump()
                <fieldset>
                    <pre>
                        <?php var_dump($x); ?>
                    </pre>
                </fieldset>
            </li>
            <li>var_export()
                <fieldset>
                    <pre>
                        <?php var_export($x); ?>
                    </pre>
                </fieldset>
            </li>
            <li id="title-li">wordwrap(string, numQubredaLinhas, br) | quebra de linhas</li>
            <li>
                <fieldset>
                    <?php
                    $string = "Aqui entra uma string grande para trabalharmos com textos e usar as quebras de linhas Aqui entra uma string grande para trabalharmos com textos e usar as quebras de linhas";
                    $newString = wordwrap($string, 5, "</br>", false);
                    echo $newString;
                    ?>
                </fieldset>
            </li>
            <li id="title-li">strlen() | Conta o número de carateres da string</li>
            <li>
                <fieldset>
                    <?php
                    $str2 = "Eu não sei o tamanho desta string";
                    $numStr = strlen($str2);

                    echo "Número de letras da variável: $numStr";
                    ?>
                </fieldset>
            </li>
            <li id="title-li">trim()Retira os espaços desnecessários da string</li>
            <li>
                <fieldset>
                    <?php
                    $nome = "    Eu vou criar      uma string com vários         espaços      ";
                    echo strlen($nome) . "<br>";
                    echo $nome . "<br>";

                    $newTrim = trim($nome);
                    echo strlen($newTrim) . "</br>";
                    echo $newTrim;

                    ?>
                </fieldset>
            </li>
            <li id="title-li">ltrim() | Retira os espaços do início da string</li>
            <li>
                <fieldset>
                    <?php
                    $strinLtrim = "       Aqui temos uma string com espaços no início";
                    echo "$strinLtrim </br>";
                    echo "Temos " . strlen($strinLtrim) . " de caracteres com espaços</br>";
                    $newstrinLtrim = ltrim($strinLtrim);

                    echo "Temos " . strlen($newstrinLtrim) . " de caracteres sem espaços</br>";
                    ?>
                </fieldset>
            </li>
            <li id="title-li">rtrim() | Retira os espaços do final da string</li>
            <li>
                <fieldset>
                    <?php
                    $strinRtrim = "Aqui temos uma string com espaços no final             ";
                    echo "$strinRtrim </br>";
                    echo "Temos " . strlen($strinRtrim) . " de caracteres com espaços</br>";
                    $newstrinRtrim = rtrim($strinRtrim);

                    echo "Temos " . strlen($newstrinRtrim) . " de caracteres sem espaços</br>";
                    ?>
                </fieldset>
            </li>
            <li id="title-li">str_word_count($varial, 0) | <small>Conta a quantidade de palavras</small></li>
            <li>
                <fieldset>
                    <?php
                    $frase = "Eu estou tentando tirar minha certificacao PHP mas o negocio ta dificil";
                    echo str_word_count($frase, 0);
                    $widthFieldset = strlen($frase) * 8;
                    $heightFieldset = strlen($frase) * 4;

                    ?>
                </fieldset>
            </li>
            <li id="title-li">str_word_count($variavel, 1)| <small>Cria e mostra um vetor</small></li>
            <li>
                <fieldset>
                    <pre>
                    <?php
                    $vet = str_word_count($frase, 1);
                    print_r($vet);
                    ?>
                    </pre>
                </fieldset>
            </li>
            <li id="title-li">str_word_count($variavel, 2)| <small>Diz a posição de cada palavra em um vetor</small></li>
            <li>
                <fieldset>
                    <pre>
                    <?php
                    $vet = str_word_count($frase, 2);
                    print_r($vet);
                    ?>
                    </pre>
                </fieldset>
            </li>
            <li id="title-li">str_split() | <small>Mostra cada letra em um índice separado em um vetor</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:72em;">
                    <pre>
                    <?php
                    echo "Frase: $frase</br>";
                    $str_split = str_split($frase);

                    print_r($str_split);
                    ?>
                </pre>
                </fieldset>
            </li>

            <li id="title-li">explode() | <small>Cria um vetor a partir de uma string</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:<?= $heightFieldset; ?>px;">
                    <pre>
                    <?php
                    echo "Frase: $frase</br>";
                    $explode = explode(" ", $frase);

                    print_r($explode);
                    ?>
                    </pre>
                </fieldset>
            </li>

            <li id="title-li">implode() | <small>Junta elementos de um vetor</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:72px;">
                    <?php $implode = implode("#", $explode); //Frase separadas por # (pode ser outra coisa) 
                    ?>
                    <p><?= $implode; ?></p>

                </fieldset>
            </li>

            <li id="title-li">joi() | <small>Junta elementos de um vetor</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:72px;">
                    <?php $join = join("-", $explode); //Frase separadas por - (pode ser outra coisa) 
                    ?>
                    <p><?= $join; ?></p>

                </fieldset>
            </li>

            <li id="title-li">chr() | Diz o código ASCII de uma letra digitada</li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:110px;">
                    <?php
                    $codigo = 99;
                    $chr = chr($codigo);
                    echo "<p>Letra $chr</br> Código $codigo</p>";

                    $codigo = 67;
                    $chr = chr($codigo);
                    echo "<p>Letra $chr</br> Código $codigo</p>";
                    ?>
                </fieldset>
            </li>


            <li id="title-li">ord() | Diz o código ASCII de uma letra digitada</li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:22em;">
                    <?php
                    $letra = "C";
                    $codigo = ord($letra);
                    echo "<p>Letra $letra</br> Código $codigo</p>";

                    $letra = "A";
                    $codigo = ord($letra);
                    echo "<p>Letra $letra</br> Código $codigo</p>";

                    $letra = "s";
                    $codigo = ord($letra);
                    echo "<p>Letra $letra</br> Código $codigo</p>";

                    $letra = "l";
                    $codigo = ord($letra);
                    echo "<p>Letra $letra</br> Código $codigo</p>";

                    $letra = "a";
                    $codigo = ord($letra);
                    echo "<p>Letra $letra</br> Código $codigo</p>";

                    $letra = "n";
                    $codigo = ord($letra);
                    echo "<p>Letra $letra</br> Código $codigo</p>";
                    ?>
                </fieldset>
            </li>


            <li id="title-li">strtolower() | <small>Converte o texto da string para minúsculo</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:2em;">
                    <?php
                    $nameToLower = "STRING COM CAIXA ALTA";
                    echo "Frase: $nameToLower<br>";
                    echo strtolower($nameToLower);
                    ?>
                </fieldset>
            </li>

            <li id="title-li">strtoupper() | <small>Converte o texto da string para maiúsculo</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:2em;">
                    <?php
                    $nameToUpper = "string com caixa baixa";
                    echo "Frase: $nameToUpper<br>";
                    echo strtoupper($nameToUpper);
                    ?>
                </fieldset>
            </li>

            <li id="title-li">ucfirst() | <small>Converte para maiúscula a primeira letra da frase</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:2em;">
                    <?php
                    $strinucfirst = "string com caixa baixa";
                    echo "Frase: $strinucfirst<br>";
                    echo ucfirst($strinucfirst);
                    ?>
                </fieldset>
            </li>


            <li id="title-li">ucwords() | <small>Converte para maiúscula a primeira letra de cada palavra da string</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:5em;">
                    <?php
                    $stringucwords = "raimundo marques de freitas filho o mestre está de volta ao trabalho";
                    echo "Frase: $stringucwords<br>";
                    echo ucwords($stringucwords);
                    ?>
                </fieldset>
            </li>

            <li id="title-li">strrev() |<small>Reverte o valor das strings (escreve as palavras ao contrário)</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:2em;">
                    <?php
                    $stringstrrev = "raimundo marques";
                    echo "Frase: $stringstrrev<br>";
                    echo strrev($stringstrrev);
                    ?>
                </fieldset>
            </li>

            <li id="title-li">strpos() | <small>Procura uma determinada palavra dentro de uma string e diz sua posição</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:2em;">
                    <?php
                    echo "Frase" . $stringstrpos = "raimundo marques de freitas";

                    echo "Buscando a palavra => " . $stringBusca = "freitas";
                    echo "</br>";
                    $position =  strpos($stringstrpos, $stringBusca);

                    echo "Posição da string => $position";
                    ?>
                </fieldset>
            </li>

            <li id="title-li">stripos() | <small>Ignora a palavra mesmo se ela não existir mas manda ainda assim manda a posição</small></li>
            <li>
                <fieldset style="width:<?= $widthFieldset; ?>px; height:3em;">
                    <?php
                    echo "Frase => " . $stringstripos = "raimundo marques de freitas</br>";

                    echo "Buscando a palavra => " . $stringBusca = "FREITAS";
                    echo "</br>";
                    $position =  stripos($stringstripos, $stringBusca);

                    echo "Posição da string => $position";
                    ?>
                </fieldset>
            </li>

        </ul>
    </div>

</body>

</html>