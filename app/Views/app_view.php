<?php

/**
 * Definindo o conteudo do content chamado no arquivo basci_view
 * 
 * @author Jesse Junior <jessepcarvalhojunior02@gmail.com>
 */

ob_start(); // Inicia o buffer de saída
?>

<div>
    <h1>Bem-vindo à Calculadora de IMC</h1>
    
    <!-- Incluindo a view do formulário -->
    <?php include __DIR__ . '/layouts/_components/form_imc_view.php'; ?>
    <!-- Incluindo a view do resultado -->
    <?php include __DIR__ . '/layouts/_components/result_imc_view.php'; ?>
</div>


<?php
$content = ob_get_clean(); // Finaliza e obtém o conteúdo do buffer
require __DIR__ . '/layouts/basic_view.php'; // Insere o conteúdo no layout
?>