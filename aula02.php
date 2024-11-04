<?php

//Método construtor: função. Executa algo automaticamente ao executar a classe.
//Método destrutor: É executado ao final, tudo é executado antes dele.

class Pessoas {
    public $nome;
    public $idade;
    public $telefone;

    function __destruct()
    {
        echo "Essa é uma função destrutora, invocada! \n";
    } // É a última a ser invocada! Não depende da ordemS

    function Teste()
    {
        echo "Testando uma função! \n";
    } //Precisa ser invocada.S

    function __construct()
    {
        echo "Função Construtora Invocada \n";
    } //Não precisa ser invocada.
}

$p1 = new Pessoas(); //Executa o construtor da classe, ele é executado com ou sem ele, caso seja construtor.
$p1 -> Teste();

?>