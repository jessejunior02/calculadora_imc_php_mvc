<form method="post" action="/">
    <label for="altura">Altura (em metros):</label>
    <input type="text" name="altura" id="altura" placeholder="0.00" oninput="addDecimal(this)" required><br>

    <label for="peso">Peso (em kg):</label>
    <input type="text" name="peso" id="peso" required><br>

    <button type="submit">Calcular IMC</button>
</form>