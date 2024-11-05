<?php
//* Encapsulamento: Separa e protege o código, os dados, permitindo o acesso dos atributos apenas por meio das funções.

class Pessoa {
    private $nome;
    private $telefone;
    private $email;

    // * Métodos getters e setters: Pegam os dados e levam aos atributos. Eles que irão disponibilizar o acesso aos atributos privados.

    // * é necessário criar uma função para cada atributo.

    public function setNome($nome){
        $this -> nome = $nome;

        // ! Função pública que recebe um parâmetro, onde há a transformação do atributo privado em um novo atributo, porém público. Isso possibilita que o atributo receba os dados que serão fornecidos.
    }

    public function getNome () {
        return $this -> nome;
    
        // ! Retorna o valor que foi armazenado no atributo evidenciado anteriormente.
    }

    public function setTelefone($telefone) {
        $this -> telefone = $telefone;
    }

    public function getTelefone() {
        return $this -> telefone;
    }

    public function setEmail($email) {
        $this -> email = $email;
    }

    public function getEmail() {
        return $this -> email;
    }

}

$p = new Pessoa();
$p -> setNome("Ivanildo\n");
$p -> setTelefone("11999999999\n");
$p -> setEmail ("isitaoi10@gmail.com\n");

// TODO: Para o \n funcionar, devemos usar "" Aspas duplas.

echo $p -> getNome();
echo $p -> getTelefone();
echo $p -> getEmail();

?>