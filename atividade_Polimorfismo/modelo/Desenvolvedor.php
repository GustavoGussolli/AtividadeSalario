<?php 

require_once("modelo/Funcionario.php");

    class Desenvolvedor extends Funcionario{

        public function informarSalario(){
            return "O funcionário " . $this->getNome() . ", cargo Desenvolvedor, possui salário de R$". $this->calcularSalario() . "\n";

        }

        public function calcularSalario(){
           return $this->salario * 2.3;
        }
}
