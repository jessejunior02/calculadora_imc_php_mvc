<?php if (isset($resultadoAnalise)): ?>
        <h2>Resultado</h2>
        <p>Seu IMC é: <?= $imcCalculado; ?></p>
        <p>Situação: <?= $resultadoAnalise; ?></p>
<?php endif; ?>