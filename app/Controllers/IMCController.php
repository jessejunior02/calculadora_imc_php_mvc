<?php

namespace App\Controllers;

use App\Models\IMCDados;
use App\Models\IMCCalculo;
use App\Models\IMCAnalise;

/**
 * Controller responsável por lidar com a lógica de cálculo e análise de IMC.
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

Class IMCController
{
    public function handleRequest()
    {
        // Verificando o método de request
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $altura = $_POST['altura'] ?? 0;
            $peso = $_POST['peso'] ?? 0;

            // Instanciar o modelo de dados e definir os valores recebidos
            $dadosIMC = new IMCDados();
            $dadosIMC->setAltura($altura);
            $dadosIMC->setPeso($peso);

            // Calcular o IMC
            $calculoIMC = new IMCCalculo($dadosIMC);
            $calculoIMC->calcularIMC();

            // Analisar o resultado do IMC
            $analiseIMC = new IMCAnalise($dadosIMC);
            $resultado = $analiseIMC->analiseResultado();
            // Exibir o resultado
            /* Retornar View  */
        }
    }
}