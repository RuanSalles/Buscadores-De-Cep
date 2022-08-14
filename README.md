# Exmplo de buscadores de Cep

### Tecnologias Utilizadas
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

### Funcionamento do repositório

Todo repositório está sendo utilizado com requisições para [AwesomeAPI]('https://docs.awesomeapi.com.br/) na funcionalidade de busca de CEP através de numeração sem pontos ou caracteres especiais.

Até o momento validações encontram-se implementadas apenas na versão utilizando Curl que retornará mensagem caso falha da requisição ou CEP não encontrado na base da API requisitada.

<div>
<img src="https://raw.githubusercontent.com/RuanSalles/Buscadores-De-Cep/main/imagens/tela-principal.png" width="350" />
</div>

### Estrutura do Projeto

<div>
<img src="https://raw.githubusercontent.com/RuanSalles/Buscadores-De-Cep/main/imagens/estrutura.png" width="350" />
</div>

Versões   | Link
:------: | :------:
FetchApi | [Clique Aqui](https://github.com/RuanSalles/Buscadores-De-Cep/tree/main/FetchApi)
Curl | [Clique Aqui](https://github.com/RuanSalles/Buscadores-De-Cep/tree/main/Curl)

### Utilização do Sistema com PHP

Para utilizar o sitema utilizando PHP, basta realizar os passos a seguir:

```bash
cd Curl
```
E executar o comando a seguir no terminal, para subir o servidor nativo do PHP
```
php -s localhost:8000
```
Logo após será possível acessar através do navegador o link http://localhost:8000

### Utilização do Sistema com JS

A utilização com JS é simplificada visto que é apenas necessário abrir o index.html contido na pasta [FetchApi](https://github.com/RuanSalles/Buscadores-De-Cep/tree/main/FetchApi).
 Então navegue até a pasta e execute o index com 2 cliques.


#### Pontos de Melhorias

+ Validação na versão FetchAPI para retorno visual na falha da requisição.
+ Tratamento dos dados recebidos via JS para envio correto do cep na requisição.
+ Incluir mascara de CEP em ambas as versões.
+ Melhorar a automação na manipulação da DOM

#### Próximas melhorias / atividades

+ Criar versão utilizando Async Await

### Contribuições
Caso deseje contribuir com o repositório fique a vontade para abrir um fork do projeto e enviar seu PR (Pull Request) com as melhorias.

### Contato

Para contatos, fique a vontade para acessar quaisquer das redes e deixar seu comentário.

[![Dev.to blog](https://img.shields.io/badge/dev.to-0A0A0A?style=for-the-badge&logo=dev.to&logoColor=white)](https://dev.to/salescode_)
[![YouTube](https://img.shields.io/badge/YouTube-%23FF0000.svg?style=for-the-badge&logo=YouTube&logoColor=white)](https://www.youtube.com/channel/UCEVan_CSqptt61vu4oT7n9w)
[![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ruan-sales-7b4051171/)
[![Twitter](https://img.shields.io/badge/Twitter-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white)](https://twitter.com/salescode_)
[![Instagram](https://img.shields.io/badge/Instagram-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white)](https://www.instagram.com/osalescodes/)

### Licença
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)