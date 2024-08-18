<h1 align="center"> Calculadora IMC </h1>

<p align="center">
    <a href="#objetivo">Objetivo</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#estrutura-do-projeto">Estrutura</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#tecnologias-utilizadas">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#como-executar-o-projeto">Como Executar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#contribuição">Contribuição</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#memo-licença">Licença</a>
</p>

<p align="center">
    <img alt="License" src="https://img.shields.io/static/v1?label=license&message=MIT&color=49AA26&labelColor=000000">
</p>

<br>

Este repositório contém uma calculadora de IMC (Índice de Massa Corporal) desenvolvida em PHP puro. O objetivo deste projeto é aplicar e praticar os conceitos de arquitetura MVC (Model-View-Controller) sem a utilização de frameworks.

## Objetivo

O foco principal deste projeto é o aprendizado e a aplicação prática da arquitetura em camadas, promovendo:

- **Organização do código:** Separando a lógica de negócio, a interface do usuário e o controle de fluxo em camadas distintas.
- **Manutenção facilitada:** Com uma arquitetura bem definida, é mais fácil realizar manutenções e evoluções na aplicação.
- **Prática de boas práticas:** Incentivando o uso de boas práticas de desenvolvimento em PHP.

## Estrutura do Projeto

A aplicação segue a arquitetura MVC, dividida da seguinte forma:

- **Models:** Responsáveis pela lógica de negócio, incluindo o cálculo do IMC.
- **Views:** Gerenciam a apresentação e a renderização da interface para o usuário.
- **Controllers:** Lidam com o fluxo de dados entre o Model e a View, processando as interações do usuário e atualizando a interface.

## Tecnologias Utilizadas

- **PHP:** Versão 7.4.33, responsável pelo backend e lógica de negócio.
- **HTML/CSS:** Utilizados para construir e estilizar a interface do usuário.

## Como Executar o Projeto

1. Clone este repositório para o seu ambiente local.
2. Garanta que você tenha o PHP 7.4.33 instalado.
3. Abra o terminal no diretório do projeto e inicie o servidor embutido do PHP:
   ```bash
   php -S localhost:8000
   ```
4. Acesse a aplicação em seu navegador através do endereço `http://localhost:8000`.

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver sugestões de melhoria, sinta-se à vontade para abrir uma issue ou enviar um pull request.

---

Projeto desenvolvido para fins de aprendizado e prática. Sinta-se à vontade para utilizar e modificar conforme necessário.
+++