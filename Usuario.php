<?php

class Usuario {
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $nomeUsuario = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;

    public function logar($login,$senha){
        $this->login = $login;
        $this->senha = $senha;
        $this->logado = true;
    }
    public function deslogar(){
        $this->logado = false;

    }
    public function desativarUsuario($id,$status){
        $this->id = $id;
        $this->status = false;

    }
    public function ativarUsuario($id,$status){
        $this->id = $id;
        $this->status = true;
    }
    public function recuperarSenha($emailRecuperacao){
        $this->emailRecuperacao = $emailRecuperacao;
    }
    public function alterarTipoPerfil($id,$tipoPerfil){
           $this->id = $id;
           $this->tipoPerfil = $tipoPerfil;
    }

    public function alterarPermissoes($id,$permissoes){
           $this->id = $id;
           $this->permissoes = $permissoes;

    }

}