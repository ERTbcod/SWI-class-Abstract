# SWI-Abstract: Cadastro de Bebidas com Classes Abstratas

![Status](https://img.shields.io/badge/status-concluído-brightgreen)
![Linguagem](https://img.shields.io/badge/linguagem-PHP-blue)

Este é um projeto acadêmico desenvolvido para aplicar e demonstrar os conceitos de **Classes Abstratas** e **Herança** em PHP, dentro do paradigma de Programação Orientada a Objetos (POO).

## 📝 Sobre o Projeto

O objetivo principal foi criar uma estrutura de classes coesa para representar diferentes tipos de bebidas. Para isso, foi utilizada uma classe abstrata `Bebida` como base, que define um contrato comum (atributos `nome`, `preco` e métodos abstratos `mostrarBebida()` e `verificarPreco()`) que todas as classes filhas devem seguir.

As classes concretas `Vinho`, `Suco` e `Refrigerante` herdam de `Bebida` e implementam seus próprios comportamentos específicos. A interface `telaBebidas.php` permite ao usuário interagir com essas classes, cadastrando itens e visualizando o resultado.

---

## ✨ Funcionalidades

* **Herança e Polimorfismo:** Demonstra como classes filhas herdam e implementam métodos de uma classe pai abstrata.
* **Cadastro Simples:** Permite cadastrar Vinhos, Sucos e Refrigerantes através de um formulário web.
* **Exibição de Dados:** Mostra as informações da bebida cadastrada na tela.
* **Lógica de Negócio:** Inclui uma verificação simples de preço para simular uma "oferta".
* **Interface Amigável:** Uma estilização simples com CSS para organizar os formulários.

---

## 🛠️ Tecnologias Utilizadas

Este projeto foi construído com as seguintes tecnologias:

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

---

## 🚀 Como Executar o Projeto

Para rodar este projeto localmente, você precisará de um ambiente de servidor PHP, como o XAMPP ou WAMP.

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/SWI-Abstract.git](https://github.com/seu-usuario/SWI-Abstract.git)
    ```

2.  **Mova a pasta do projeto:**
    Mova a pasta `SWI-Abstract` para o diretório raiz do seu servidor local (geralmente `htdocs` no XAMPP).

3.  **Inicie o servidor:**
    Abra o painel de controle do XAMPP e inicie o serviço **Apache**.

4.  **Acesse no navegador:**
    Abra seu navegador e acesse a URL:
    ```
    http://localhost/SWI-Abstract/telaBebidas.php
    ```

## 🖼️ Demonstração

![Demonstração da Tela de Cadastro](<img width="1287" height="966" alt="printScreen" src="https://github.com/user-attachments/assets/6f67c45f-0f0d-40c3-b9be-16a397085d70" />)


