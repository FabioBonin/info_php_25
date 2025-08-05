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
    public $gasolina = 0;
    public $portaAberta = false; 
    
    public function abrirPorta() { if ($this->portaAberta) 
    { echo "A porta já está aberta."; 
    } else { $this->portaAberta = true; 
            echo "Você abriu a porta.";
     }
    } 
    public function fecharPorta() { if (!$this->portaAberta)
    { echo "A porta já está fechada."; } 
    else { $this->portaAberta = false;
          echo "Você fechou a porta.";
         } 
        } 
    public function statusPorta() { if ($this->portaAberta)
    { echo "A porta está aberta.";
    } else { echo "A porta está fechada."; 
      } 
    }
}

    public function desligado ()
    {
        $this->ligado = false;
    }

      public function rodar (){
        $podeRodar = $this->bateria && $this->ligado;
    {
        if ($this->ligado){
            echo "O carro já pode rodar...";
        } else if (!$this->ligado) {
            echo "O carro está desligado, ligue o carro antes...";
    }     else if ($this->ligado && $this->combustivel = false) {
            echo "O carro está sem combustivel, abasteça primeiro...";

    }

    public function abastecer ($litros){
        $this->gasolina += $litros;
        echo "Abastecido com $litros litros.
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
