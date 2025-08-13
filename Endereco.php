<?php

class Endereco {
public $bairro = "";
public $logrador = "";
public $complemento = "";
public $numero = "";
public $cidade = "";
public $estado = "";
public $cep = "";
public $pais = "";
public $tipoEndereco = "";

 public function obterBairro(){
        return $this->bairro;
    }
    public function alterarBairro($bairro){
        return $this->bairro = $bairro;
    }
     public function obterLogrador(){
        return $this->logrador;
    }
    public function alterarLogrador($logrador){
        return $this->logrador = $logrador;
    }
    public function obterComplemento(){
        return $this->complemento;
    }
    public function alterarComplemento($complemento){
        return $this->complemento = $complemento;
    }
     public function obterNumero(){
        return $this->numero;
    }
    public function alterarNumero($numero){
        return $this->numero = $numero;
    }
     public function obterCidade(){
        return $this->cidade;
    }
    public function alterarCidade($cidade){
        return $this->cidade = $cidade;
    }
     public function obterEstado(){
        return $this->estado;
    }
    public function alterarEstado($estado){
        return $this->estado = $estado;
    }  public function obterCep(){
        return $this->cep;
    }
    public function alterarCep($cep){
        return $this->cep = $cep;
    }  public function obterTipoEndereco(){
        return $this->tipoEndereco;
    }
    public function alterarTipoEndereco($tipoEndereco){
        return $this->tipoEndereco = $tipoEndereco;
    }


}