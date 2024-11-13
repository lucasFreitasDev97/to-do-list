# To-Do List App

Este é um aplicativo simples de To-Do List desenvolvido em Laravel. O objetivo é permitir que os usuários adicionem tarefas, marquem como concluídas e removam as que não são mais necessárias.

## Funcionalidades

- **Autenticação de Usuários:**
  - Registro de novos usuários
  - Login e logout

- **Gestão de Tarefas:**
  - Adicionar novas tarefas com título e descrição
  - Visualizar uma lista de todas as tarefas
  - Marcar tarefas como concluídas
  - Remover tarefas concluídas ou não desejadas

- **Interface Simples:**
  - Layout limpo e funcional usando Blade Templates
  - Feedback visual para operações (ex: tarefas adicionadas com sucesso)

- **Banco de Dados:**
  - Utilização de MySQL para armazenar usuários e tarefas

## Requisitos

- PHP >= 8.2
- Composer
- MySQL
- Laravel 11.x

## Instalação

1. Clone o repositório:
   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
2. Instale as dependências do projeto:
   composer install

3. Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:
   cp .env.example .env

4. Gere a chave da aplicação:
   php artisan key:generate

5. Configure seu banco de dados no arquivo .env.

6. Execute as migrações do banco de dados:
   php artisan migrate

7. Inicie o servidor de desenvolvimento:
   php artisan serve

8. Acesse a aplicação em http://localhost:8000.

Contribuição
Se você quiser contribuir com este projeto, por favor, faça um fork do repositório e envie um pull request com suas alterações. Agradecemos todas as contribuições!

Licença
Este projeto está licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
