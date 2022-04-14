<?php
$nome="Gabriella Ramos Meira";
$RA="322100246";
$primeira_nota=9.5;
$segunda_nota=4;
$terceira_nota=10;
$media= ($primeira_nota + $segunda_nota + $terceira_nota) / 3;
$media = number_format($media, 2, '.', '');

echo '<b>Programa em PHP para calcular a média</b><br>';
echo '<br>';
echo "<b>Nome:</b> $nome<br>";
echo "<b>RA: </b> $RA<br>";
echo "<b>Primeira nota: </b> $primeira_nota<br>", "<b>Segunda nota: </b> $segunda_nota<br>", "<b>Terceira nota: </b>$terceira_nota<br>";
echo "<b>Média: </b> $media<br>";


if ($media >= 6){
    echo '<b>Situação:</b> Aprovado';
}
elseif ($media <6){
    echo '<b>Situação:</b> Reprovado';
  
}
?>