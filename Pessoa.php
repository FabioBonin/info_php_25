<?php

class Pessoa {
    public $nome = "";
    public $sexo = "";
    public $dataNascimento = "";
    public $nacionalidade = "";
    public $estadoCivil = "";
    public $nomeMae = "";
    public $nomePai = "";

    public function obterNome(){
        return $this->nome;
    }
    public function alterarNome($nome){
        return $this->nome = $nome;
    }
     public function obtersexo(){
        return $this->sexo;
    }
        public function alterarsexo($sexo){
        return $this->sexo = $sexo;
    }
       public function obterDataNascimento(){
        return $this->dataNascimento;
    }
       public function alterarDataNascimeto($dataNascimento){
        return $this->dataNascimento = $dataNascimento;
    }
        public function obterNacionalidade(){
        return $this->nacionalidade;
    }
          public function alterarNacionalidade($nacionalidade){
        return $this->nacionalidade = $nacionalidade;
    }
      public function obterEstadoCivil(){
        return $this->estadoCivil;
    }
    public function alterarEstadoCivil($estadoCivil){
        return $this->estadoCivil = $estadoCivil;
    }
     public function obterNomeMae(){
        return $this->nomeMae;
    }
    public function alterarNomeMae($nomeMae){
        return $this->nomeMae = $nomeMae;
    }
    public function obterNomePai(){
        return $this->nomePai;
    }
     public function alterarNomePai($nomePai){
        return $this->nomePai = $nomePai;
    }

            

}

