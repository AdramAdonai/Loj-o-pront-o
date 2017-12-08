<?php

require_once "Conexao.php";

class Produto {

    public $id;
    public $nome;
    public $preco;
    public $categoria;
    public $estoque;

    public function __construct($nome, $preco, $estoque, $categoria, $id = null){ //estoque

        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->estoque = $estoque;
        $this->id = $id;
    }

    public function estaDisponivel(){
        if($this->estoque>0){
            echo "Disponivel";
        }
        else{
            echo "Indisponível";
            }
    }
}
