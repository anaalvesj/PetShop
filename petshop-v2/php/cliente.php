<?php
    class Cliente{
        public function cadastrar($nome,$cpf,$telefone,$email,$senha){
            $conexao = Conexao::conectar();
            $queryInsert = "insert into tbCliente (nomeCliente,cpfCliente,telefoneCliente,emailLogin,senhaLogin,idPerfilAcesso) 
            Values ('".$nome."','".$cpf."','".$telefone."','".$email."','".$senha."',2)";
            $conexao->exec($queryInsert);
        }

        public function listar($id){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbCliente c (nomeCliente,cpfCliente,telefoneCliente,emailLogin,senhaLogin,idPerfilAcesso)
            INNER JOIN tbEnderecoCliente e ON c.idCliente=e.idCliente
            WHERE idCliente = $id";
            $conexao->exec($queryInsert);
        }

        public function editar($id,$nome,$telefone,$email,$cep,$endereco,$numero,$bairro,$cidade,$estado){
            $conexao = Conexao::conectar();
            $queryUpdate = "UPDATE tbCliente
                SET nomeCliente = $nome,
                SET telefoneCliente = $telefone,
                SET emailLogin = $email,
                SET cep = $cep,
                SET endereco = $endereco,
                SET numero = $numero,
                SET bairro = $bairro,
                SET cidade = $cidade,
                SET estado = $estado,
                WHERE idCliente = $id";
           
            $conexao->exec($queryUpdate);
        }
    }
?>