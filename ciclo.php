<?php
/**
 * Exercício : gerar uma página que mostre aleatoriamente uma
 * tabuada (do 1 ao 9) para os primeiros 20 factores
 */

// parâmetros da página (entre que números será mostrada a tabuada)
$min = 1;
$max = 20;

// gerar aleatoriamente a tabuada a mostrar
$tabuada = rand(1,9);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
// ciclo para escrever o HTML da tabuada na página
 for ($i=$min; $i < $max; $i++) { 
     echo "<p>";
     echo $tabuada."x".$i."=".$tabuada*$i;
     echo "</p>";
 }
 ?>

</body>
</html>