<?php 

require_once("modelo/Funcionario.php");

    class Estagiario extends Funcionario{
        public function informarSalario(){
            return "O funcionário " . $this->getNome() . ", cargo estagiário, possui salário de R$". $this->calcularSalario() . "\n";

        }

        public function calcularSalario(){
           return $this->salario * 0.8;
        }
}


