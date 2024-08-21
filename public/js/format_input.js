function addDecimal(input) {
    let value = input.value.replace(/\D/g, ''); // Remove tudo que não for número

    if (value.length > 2) {
        // Se o valor tiver mais de duas casas decimais, insere o ponto decimal
        value = value.slice(0, -2) + '.' + value.slice(-2);
    }

    input.value = value.replace(/^0+/, ''); // Remove zeros à esquerda, exceto antes do ponto
}