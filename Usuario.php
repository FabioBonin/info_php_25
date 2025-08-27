<?php
require_once "./Model.php";

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
    private $modelUsuario = null;

    public function __construct($model)
    {
        $this->modelUsuario = $model;
    }

    public function listarUsuarios() {
        $sql = "SELECT * FROM usuarios";

        $usuarios = $this->modelUsuario->Read($sql);

        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>";
            echo $usuario->senha . "<br>";
        }
    }
       public function buscarUsuarios($id) {
        $sql = "SELECT * FROM usuarios WHERE id=$id";

        $usuarios = $this->modelUsuario->ReadOne($sql);
              foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>";
            echo $usuario->status . "<br>";
        }
       }
        public function atualizarUsuarios($id) {
        $sql = "SELECT * FROM usuarios WHERE id=$id";

        $usuarios = $this->modelUsuario->Upgrad($sql);
        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>";
            echo $usuario->senha . "<br>";
            echo $usuario->email_recuperacao . "<br>";
            echo $usuario->status . "<br>";
            echo $usuario->tipo_perfil . "<br>";
            echo $usuario->permissoes . "<br>";
        }
        }

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

$usuario = new Usuario($model);
$usuario->listarUsuarios();
$usuario->buscarUsuarios(1);