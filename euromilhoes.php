<?php
/**
 * Exercício : página que gera uma chave do euromilhões
 */

// declaração de uma classe em PHP
class Chave {
    // propiedades e métodos deverão indicar o tipo de acesso
    // (public, private ou protected)
    public $numeros = array();
    public $estrelas = array();

    // o construtor se implementado tem o nome de __construct()
    // e pode ter argumentos
    public function __construct() {
        // $this permite referir propriedades e métodos da classe
        // a partir de um objecto instanciado
        $this->numeros = $this->extracao(5,1,50);
        $this->estrelas = $this->extracao(2,1,12);
    }

    private function extracao($n,$min,$max) {
        // tombola <= array vazio
        $tombola = array();
        // tombola <= preencher com numeros de $min a $max de 1 em 1
        $tombola = range($min,$max,1);
        // extraidos <= array vazio
        $extraidos = array();

        //var_dump($tombola);
        //echo "<hr/>";
        for($i=0; $i< $n; $i++) {
            // gerar indice entre 0 e numero_de_elementos_na_tombola - 1
            $idx = rand(0,count($tombola)-1);
            // retirar elemento no indice gerado da tombola
            $elemento_array = array_splice($tombola,$idx,1);
            //var_dump($elemento_array);
            // acrescentar elemento aos extraidos
            $extraidos[]=$elemento_array[0];
        }
        //var_dump($extraidos);
        // ordenar os numeros extraidos
        sort($extraidos);
        // a função devolve o array de numeros extraídos
        return $extraidos;
    }

    /**
     * método que escreve a chave em HTML (div + 2 listas)
     */
    public function escreveHTML() {
        echo "<div class='chave'>";

        echo "<ul class='numeros'>";
            foreach ($this->numeros as $numero) {
                echo "<li> $numero </li>";
            }
        echo "</ul>";

        echo "<ul class='estrelas'>";
        foreach ($this->estrelas as $estrela) {
            echo "<li>".$estrela."</li>";
        }
        echo "</ul>";

        echo "<ul class='estrelas'>";
        echo "</ul>";

        echo "</div>";
    }

}



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
<div id="content">
<?php
// criar uma nova chave
$c = new Chave();
// escrever a sua representação em HTML aqui
$c->escreveHTML();

?>
</div>
    
</body>
</html>