# ME Imprensa & Assessoria - Tema WordPress Customizado

[[Status](https://img.shields.io/badge/Status-Concluído-success)](#)
[[Tecnologias](https://img.shields.io/badge/Tecnologias-PHP_|_WordPress_|_Tailwind_CSS-blue)](#)

> **LINK TEMPORÁRIO PARA ACESSAR:** [https://me-imprensa.infinityfree.me/](https://me-imprensa.infinityfree.me/)

## Sobre o Projeto
Este repositório contém o código-fonte de um tema WordPress construído integralmente do zero. O projeto nasceu da necessidade de transformar uma landing page estática (desenvolvida com HTML5 e Tailwind CSS) em um portfólio dinâmico, onde o conteúdo pudesse ser gerenciado através de um Sistema de Gerenciamento de Conteúdo (CMS).

## Destaques Técnicos

* **Conversão de HTML/CSS para PHP:** Segmentação estrutural do código estático utilizando a hierarquia de templates do WordPress (`header.php`, `footer.php`, `front-page.php`).
* **Custom Post Types (CPTs):** Implementação de funcionalidades no *back-end* via `functions.php` para gerenciar entidades específicas do negócio, permitindo cadastrar "Cases de Sucesso" e "Clientes" em menus dedicados no painel de administração, separados das postagens comuns.
* **Looping Dinâmico:** Utilização da classe `WP_Query` para buscar e renderizar os dados do banco de dados MySQL diretamente no front-end, substituindo o conteúdo *hardcoded*.
* **Suporte Nativo a Mídias:** Configuração de *post-thumbnails* para o gerenciamento otimizado de logotipos e imagens de capa de portfólio.
* **Estilização Ágil:** O CSS base foi gerado através do framework Tailwind CSS e injetado de forma unificada no `style.css` obrigatório do tema, mantendo as classes utilitárias funcionais dentro do ambiente PHP.

## Estrutura do Tema

A arquitetura do tema foi organizada focando nos arquivos essenciais para o funcionamento do WordPress:

```text
tema-me-imprensa
 ┣ 📂 img/               # Diretório de imagens e assets visuais
 ┣ 📜 style.css          # Declaração do tema e estilos compilados (Tailwind)
 ┣ 📜 functions.php      # Registro de CPTs e ativação de recursos nativos
 ┣ 📜 header.php         # Estrutura do <head> e navegação principal (Menu)
 ┣ 📜 front-page.php     # Template principal contendo os loops WP_Query
 ┣ 📜 footer.php         # Rodapé e fechamento de tags estruturais
 ┗ 📜 index.php          # Arquivo de fallback
