<?php
    include_once "conexao.php";
    include_once "cliente.php";

    try{
        $usuarioAtivo = $_SESSION['idUsuario'];

        

        $cliente = new Cliente();
        $conexao = Conexao::conectar();

        $nome = $_POST['nome'];
        $telefone = $_POST['number'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numcasa'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];


        $cliente->editar($usuarioAtivo,$nome,$telefone,$email,$cep,$endereco,$numero,$bairro,$cidade,$estado);
        echo "<script>alert('Cadastro realizado')</script>";
        header("Location:../index.php");        

    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());
    }

?>