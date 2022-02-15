<?php

//classe nome
//atributos
//métodos

class ControleUsuario {
    
    public function index(){
        echo "Controller Usuario - Listar Usuários<br>";
        include_once('views/usuarios/listarUsuario.php');
    }

    public function cadastrar(){
        echo "Controller Usuário - Método Cadastrar<br>";
        include_once 'views/usuarios/cadastrarUsuario.php';
        
        $Dados = array(
            'id'=>2,
            'nome'=>"Joseph"
        );
       
        $CadastrarUsuario = new ModelsUsuario();
        $CadastrarUsuario->ExeCreate("usuarios",$Dados);
        echo $CadastrarUsuario->getMsg();

    }

}