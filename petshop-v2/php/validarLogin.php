<?php

if(isset($_POST['email']) && !empty($_POST['email']) && 
isset($_POST['senha']) && !empty($_POST['senha'])){
     
    require 'conexao.php';
    require 'Usuario.php';

    $usuario = new Usuario();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($usuario->login($email,$senha) == true){
        if(isset($_SESSION['idUsuario'])){
            echo "<script> alert('Cadastro realizado') </script>";
            header("Location:../index.php");
        }
    } else {
        echo "<script> alert('Usuário ou senha incorretos') </script>";
        header("Location:../login.html");
    }

} else{
    echo"<script> alert('Usuário ou senha incorretos')</script>";
    header("Location:../login.html");

}
?>