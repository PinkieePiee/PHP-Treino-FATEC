//Objeto é a classe em execução.
// Classe é o molde para se criar um objeto.

<?php

echo "Bem vindo ao PHP!\n"; // \n faz a quebra de linha.

class Pessoa {
    public $nome;
    public $idade;
    public $endereco;
    public $email;

    //Métodos = funções.
    //São as ações que os objetos irão realizar.

    public function BoasVindas() {
        echo "Bem-Vindo ao nosso curso de PHP!";
    }
}
// fim classe Pessoa

$p1 = new Pessoa();
// Instâncias da classe.
$p2 = new Pessoa();

echo $p1 -> BoasVindas() . "\n"; 
$p1 -> nome = "Isabela";
$p1 -> idade = 21;

var_dump($p1); //Retorna o valor dentro da variável.
#Outra forma de retornar os valores de uma variável.
echo $p1 -> nome . " tem " . $p1 ->idade . " anos."; 

// -> define um membro da classe.

echo "\n"; //Gera uma quebra de linha.

$p2 -> nome ="Ana";
$p2 -> idade =19;

var_dump($p2);
echo $p2 -> nome . " tem " . $p2-> idade . " anos.";



?>

//Cada objeto ganha um espaço particular na memória.
//Pode-se criar quantos objetos quiser dentro de uma mesma classe.

//Construtor = método na classe que leva o mesmo nome.

// ctrl + " abre o terminal
// cls limpar o terminal