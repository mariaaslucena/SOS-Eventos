# SOS-Eventos
Projeto Plataforma Web + APP que conecta organizadores de eventos a profissionais audiovisuais, rápido, fácil e confiável. 

## Revisando
A SOS Eventos é uma multiplataforma que tem por objetivo intermediar o contato entre organizadores de eventos e profissionais audiovisuais. 
Diante das dificuldades que o mercado enfrenta, falta de profissionalismo, confiabilidade e praticidade. Esse projeto busca tornar o cotidiano desses profissionais mais descomplicado e integro.

## Prova de conceito
A prova de conceito da plataforma SOS Eventos demonstra a viabilidade técnica do projeto por meio de uma inteface web simples desenvolvida em:

- Frontend: HTML + CSS e Java Script
- Backend: PHP
- Banco de Dados: Mysql (via XAMPP)

## As seguintes soluções foram implementadas nesta etapa:

Criação do banco de dados 'sos_eventos' **->** Modelagem das tabelas 'fotografos' e 'solicitacoes'**->** Relacionamento entre tabelas (FOREIGN KEY) **->** 
Formulário HTML + CSS + Java Script para cadastro de solicitações **->** Script PHP para salvar dados no banco **->** Consulta utilizando JOIN para exibição das informações em comum

Esta prova de conceita valida a integração do sistema através das tecnologias citadas e viabiliza a arquitetura proposta.

## Estrutura do Projeto

- `conexao.php` → Responsável pela conexão com o banco de dados.
- `form_solicitacao.php` → Formulário para cadastro de solicitações.
- `salvar_solicitacao.php` → Script backend para salvar dados no banco.
- `style.css` → Estilização da interface.
- `script.js` → Validações e interações do frontend.
- `sos_eventos.sql` → Script de criação do banco de dados.
- `README.md` → Documentação do projeto.

## Banco de Dados

Nome do banco: `sos_eventos`

O projeto utiliza:

- Tabela `fotografos`
- Tabela `solicitacoes`
- Relacionamento via chave estrangeira (FOREIGN KEY)

## Como Executar o Projeto

1. Instalar o XAMPP.
2. Iniciar Apache e MySQL.
3. Criar um banco chamado `sos_eventos`.
4. Importar o arquivo `sos_eventos.sql` no phpMyAdmin.
5. Colocar a pasta do projeto dentro de `htdocs`.
6. Acessar no navegador: http://localhost/sos_eventos/form_solicitacao.php

## Observação de Segurança

Para fins acadêmicos, o projeto utiliza as credenciais padrão do XAMPP:

Usuário: `root`  
Senha: *(vazia)*  

Em ambiente de produção recomenda-se criar um usuário específico com permissões restritas.




