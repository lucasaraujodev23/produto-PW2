<?php

class Produto {
    private $id;
    private $descricao;
    private $preco;
    private $fornecedor;

    public function getId(){
        return $this -> $id;
    }

    public function getDescricao(){
        return $this -> $descricao;
    }

    public function getPreco(){
        return $this -> $preco;
    }

    public function getFornecedor(){
        return $this -> $fornecedor;
    }

    public function setDescricao(){
        $this -> descricao = $descricao;
    }

    public function setPreco(){
        $this -> preco = $preco;
    }

    public function setFornecedor(){
        $this -> fornecedor = $fornecedor;
    }

    /**
    * @author: Lucas Araujo
    * Método para conectar ao banco
    * Retorna Verdadeiro se conectar ou Falso se não conseguir
    */

    public function conectar(){
        try {
            $dsn    = "mysql:dbname=produto;host=localhost";
            $dbUser = "root";
            $dbPass = "";

            $this->pdo = new PDO($dsn, $dbUser, $dbPass);
            echo "<h2> Conectado ao banco com sucesso!</h2>";
            return true;
        } catch (\Throwable $th) {
            echo "<h2> Sem conexão. Tente novamente mais tarde.</h2>";
            return false;
        }
    }
}

?>