<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\IMCAnalise;
use App\Models\IMCCalculo;
use App\Models\IMCDados;

/**
 * Controlador responsável pelo fluxo de dados entre o Model e a View.
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

 
/**
 * Armazenamento de classes dentro de variáveis
 * 
 */
$imcDados = new IMCDados();
$imcCalculo = new IMCCalculo($imcDados);
$imcAnalise = new IMCAnalise($imcDados);


/**
 * Verificando se determiados POST condiz com o formulário de entrada
 */
if(isset($_POST['altura']) && isset($_POST['peso'])){
    $altura = $_POST['altura'];
    $peso = $POST['peso'];


    /**
     * Passar os valores coletados para as classes Models.
     */
    // Atualizando o valo do metodo setAltura() para ser utilizado no getAltura()
    $imcDados->setAltura($altura);
    $imcDados->setPeso($peso);
    
    // Retornando o calculo
    $imcCalculo->calcularIMC();
    
    // Armazenando o IMC final em uma variável
    $imcCalculado = $imcDados->getImc();
    
    // Retornando a Analise do IMC
    $resultadoAnalise = $imcAnalise->analiseResultado();

    // Retornando os dados para a view
    include __DIR__ . '/../Views/app_view.php';
} else {
    // Caso não haja POST, mostrar o formulário
    include __DIR__ . '/../Views/app_view.php';
}