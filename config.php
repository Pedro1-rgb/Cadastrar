<?php

if(isset($_post['salvar'])) {

    $nome = $_post["nome"];
    $sobrenome = $_post["sobrenome"];
    $senha = $_post["senha"];
    $email = $_post["email"];


}
$host = "localhost";
$banco = "cadastro";
$user = "root";
$senha_user ="";

$con = mysqli_connect($host,$banco, $user,$senha_user);

if(!$con){
    die("conexão falhou." . mysqli_connect_error())
}
$sql = "INSERT INTO clientes(nome,sobrenome,senha,email) VALUES('$nome','$sobrenome','$senha','$email',)";

$rs = mysqli_query($con,$sql);

if($rs){
    echo "Você foi cadastrado com sucesso,";
}

?>
