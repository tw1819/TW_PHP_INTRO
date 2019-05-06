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
/**
 * Exercício : Escrever "olá xxxxx" numa página
 */

 // as variáveis em php, são iniciadas pelo símbolo '$'
 // todas as instruções devem terminar com ';'
$msg_ola = "ola";
$msg_nome = "pedro";

// o código php enviado para o cliente é substituído
// pelo output do script, ou seja o resultado das instruções
// de escrita na stream de standard output.
echo ("<h1>".$msg_ola. " ".$msg_nome."</h1>");

?>
</body>
</html>