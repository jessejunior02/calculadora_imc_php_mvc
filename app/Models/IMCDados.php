<?php

namespace App\Models;

/**
 * Classe responsável por recolher dados para o calculo IMC (Índice de Massa Corporal).
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

class IMCDados
{
    /**
     * Variaveis definidas
     * 
     * @var float $altura
     * @var float $peso
     * @var float $imc
     */
    private $altura;
    private $peso;
    private $imc;


    /**
     * Construtor da classe IMCDados.
     * Inicializa altura e peso com zero e o IMC com uma string vazia.
     */
    public function __construct()
    {
        $this->altura = 0.0;
        $this->peso = 0.0;
        $this->imc = 0.0;
    }


    /**
     * Define a Altura
     * 
     * @param float $altura Altura em metros
     */
    public function setAltura(float $altura)
    {
        $this->altura = $altura;
    }

    /**
     * Obtem a Altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Definir o Peso
     * 
     * @param float $peso em Kg
     */
    public function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    /**
     * Obtem o Peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Definir o IMC
     * 
     * @param float $imc
     */
    public function setImc(float $imc)
    {
        $this->imc = $imc;
    }

    /**
     * Obtem o IMC
     */
    public function getImc()
    {
        return $this->imc;
    }
}