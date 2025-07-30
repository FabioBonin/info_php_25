<?php

class Carro {
    public $marca ="BMW";
    public $ano = 2000;
    public $cor = "Azul";
    public $motor = "2.0";
    public $tipo = "SUV";
    public $capacidadeLitros = 400;
    public $combustivel = true;
    public $potencia = 500;
    public $kmPorLitros = 0;
    public $zeroCem = 3;
    public $aro = 18;
    public $bateria = true;
    public $motorista = "Fábio";
    public $ligado = false;
    public $podeRodar = 0;

    public function ligar ($combustivel, $bateria)
    {
        $this->ligado = true;
       
    }

    public function desligado ()
    {
        $this->ligado = false;
    }

      public function rodar (){
        $podeRodar = $this->bateria && $this->bateria && $this->ligado;
    {
        if ($this->ligado){
            echo "O carro já pode rodar...";
        } else {
            echo "O carro está desligado, ligue o carro antes...";

    }
    }
}
      public function mostrar ()
    {
        echo "Marca do Carro: $this->marca, Ano: $this->ano, Cor: $this->cor, Motor: $this->motor, Tipo: $this->tipo, 
        Capacidade do Porta malas: $this->capacidadeLitros, Potência $this->potencia cv, $this->kmPorLitros km/L,
         0/100 $this->zeroCem Segundos, Diâmetro do Aro $this->aro, Nome do Motorista $this->motorista.";

    }
    public function kmPorLitros($Km, $litros) {
        $this->kmPorLitros = $Km / $litros;
    }
    public function exibir() {
        echo $this->kmPorLitros . ": Km/L" . "<br>";
    }

}

$objCarro = new Carro();
$objCarro ->kmPorLitros(300, 30);
$objCarro->exibir();
$objCarro ->Ligar();
echo "<br>";
$objCarro ->mostrar();