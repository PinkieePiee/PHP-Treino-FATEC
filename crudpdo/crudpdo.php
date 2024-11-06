<?php

// ! Criando a conexão entre o banco de dados e o projeto.

try {
$pdo =new PDO("mysql:dbname=crudpdo;host=localhost","root","root");
// TODO: App do banco em uso, modelo do banco, nome do banco, local onde está hospedado, nome do usuário, senha.
}

catch (PDOException $e){
    echo "Erro com banco de dados. " . $e -> getMessage();
}

catch (Exception $e) {
    echo"Erro genérico! " . $e -> getMessage();
}

// ! inserção de dados no banco de dados:

$resultado = $pdo -> prepare("insert into pessoa(nome, telefone, email)values(:n, :t, :e)");
/*$resultado -> bindValue(":n", "Isabela");
$resultado -> bindValue(":t", "98653289652");
$resultado -> bindValue(":e", "isinhafofa@gmail.com");
$resultado -> execute();*/

/*$resultado -> bindValue(":n", "Ana");
$resultado -> bindValue(":t", "58764219856");
$resultado -> bindValue(":e", "anafofa@gmail.com");
$resultado -> execute();

$resultado -> bindValue(":n", "Luiz");
$resultado -> bindValue(":t", "87542196835");
$resultado -> bindValue(":e", "luizinho@gmail.com");
$resultado -> execute();*/

// * Ocultei para não duplicar no banco de dados


/*  Outra alternativa mais detalhada:
$servername = "localhost"; // ou o endereço do seu servidor
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados" 

$conn = new mysqli($servername, $username, $password, $dbname);*/


?>