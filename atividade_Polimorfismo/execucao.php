<?php

require_once("modelo/Funcionario.php");
require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

do {

    echo "--------------------- \n";
    echo "| 1-   Gerente      | \n";
    echo "|-------------------| \n";
    echo "| 2- Desenvolvedor  | \n";
    echo "|-------------------| \n";
    echo "| 3-   Estagiário   | \n";
    echo "--------------------- \n";
    echo "| 0-     Sair       | \n";
    echo "--------------------- \n";

    $escolha = readline("Informe a opção: ");
    $funcionario = null;

    switch ($escolha) {
        case '0':
            system('clear');
            echo "Programa encerrado! \n";
            break;

        case '1':
            $funcionario = new Gerente();
            break;

        case '2':
            $funcionario = new Desenvolvedor();
            break;

        case '3':
            $funcionario = new Estagiario();
            break;

        default:
            system('clear');
            echo "Digite uma opção disponivel no programa! \n";
            break;
    }

    if ($funcionario != null){

        $funcionario->setNome(readline("Informe o Nome: "));
        system('clear');
        echo $funcionario->informarSalario() . "\n";
    }

} while ($escolha != 0);
