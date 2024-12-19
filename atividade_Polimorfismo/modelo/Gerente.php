<?php 

require_once("modelo/Funcionario.php");

    class Gerente extends Funcionario {

        public function informarSalario(){
            return "O funcionário " . $this->getNome() . ", cargo Gerente, possui salário de R$". $this->calcularSalario() . "\n";

        }

        public function calcularSalario(){
           return $this->salario * 4.5;
        }
}

