<?php

class ModelsUsuario {
    private $Tabela;
    private $Dados;
    private $Msg;

    public function ExeCreate($Tabela, array $Dados){
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->Msg = "
            Models Usuário<br>
            Tabela: {$this->Tabela}<br>
            DAdos: <br>
            id: {$this->Dados['id']}<br>
            Nome: {$this->Dados['nome']}
        ";

    }

    public function getMsg(){
        return $this->Msg;
    }


}