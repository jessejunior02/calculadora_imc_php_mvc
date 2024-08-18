<?php

namespace App\Models;

/**
 * Classe responsável por realizar o calculo IMC (Índice de Massa Corporal).
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

class IMCCalculo
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
     * Realiza o calculo de IMC (Índice de Massa Corporal)
     */
    public function calcularIMC()
    {
        // Guardando os dados da class IMCDados dentro de variáveis
        $altura = $this->dadosIMC->getAltura();
        $peso = $this->dadosIMC->getPeso();

        // Verifica se os valores são validos para o calculo
        if($altura >= 0 && $peso >= 0)
        {
            // Calcular o imc
            $imc = $peso / ($altura * $altura);
            // Atualizar o valor do IMC na class IMCDados
            $this->dadosIMC->setImc($imc);
        } else {
            $this->dadosIMC->setImc(0.0);
        }
    }
}