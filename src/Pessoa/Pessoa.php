<?php 

namespace  Testes\Pessoa;

class Pessoa {


    public $nome_da_pessoa;
    public $idade_da_pessoa;
    public $status_da_pessoa;

   public function __construct($nome,$idade,$status){
        $this->nome_da_pessoa = $nome;
        $this->idade_da_pessoa = $idade;
        $this->status_da_pessoa = $status;
    }

    public function retorna_nome_da_pessoa()
    {
        return $this->nome_da_pessoa;
    }

    public function retorna_idade_da_pessoa()
    {
        return $this->idade_da_pessoa;
    }

    public function retorna_status_da_pessoa()
    {
        return $this->status_da_pessoa;
    }

}