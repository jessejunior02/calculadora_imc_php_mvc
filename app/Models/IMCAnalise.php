<?php

namespace App\Models;

/**
 * Classe responsável por a analisar o resultado do IMC (Índice de Massa Corporal)
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

class IMCAnalise 
{
    private $dadosIMC;

    /**
     * Construtor da classe IMCCalculo
     * 
     * @param IMCDados $dadosIMC Instancia da classe IMCDados
     */
    public function __construct(IMCDados $dadosIMC)
    {
        $this->dadosIMC = $dadosIMC;
    }

    /**
     * Analisa o resultado do IMC e retorna um valor de acordo com seu IMC (Índice de Massa Corporal)
     */
    public function analiseResultado()
    {
        $imc = $this->dadosIMC->getImc();

        // Analise do imc
        if($imc < 18.50){
            return "Abaixo do Peso";
        } elseif ($imc < 25){
            return "Pesso Normal";
        } elseif($imc < 30){
            return "Pré-Obesidade";
        } elseif($imc < 35){
            return "Obesidade Grau I";
        } elseif($imc < 40){
            return "Obesidade Grau II";
        } else {
            return "Obesidade Grau III";
        }
    }
}