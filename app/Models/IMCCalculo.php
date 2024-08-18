<?php

namespace App\Models;

use App\Models\IMCDados;

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

}