<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\IMCAnalise;
use App\Models\IMCCalculo;
use App\Models\IMCDados;

/**
 * Este é o ponto de entrada principal da aplicação, a lógica de roteamento que encaminha a requisição para o controlador 
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

 // Receber a URL requisitada
 $request = $_SERVER['REQUEST_URI'];

 //Roteamento simples baseado na URL
 switch ($request) {
    // Definindo a rota
    case '/':
    case '/calcular-imc':
        require __DIR__ . '/../app/Controllers/IMCController.php';
        break;

    // Caso tentar acessar uma rota que não existe
    default:
        http_response_code(404);
        include __DIR__ . '/../app/Views/error_view.php';
        break;
 }
