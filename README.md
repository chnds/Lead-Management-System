# Sistema de Gerenciamento de Leads

## Visão Geral do Projeto
Este projeto é um sistema de CRM desenvolvido em Laravel para o gerenciamento de leads.

## Funcionalidades Principais
- Autenticação de usuário
- Listagem, adição, edição e exclusão de leads
- API para operações CRUD

## Tecnologias Utilizadas
- Laravel (Back-End)
- HTML, Bootstrap, CSS, JavaScript (jquery) (Front-End)
- MySQL (Persistência de Dados)

## Instruções de Configuração
1. Clone o repositório: `git clone https://github.com/chnds/Lead-Management-System.git`
2. Instale as dependências: `composer install`
3. Configure o ambiente: Copie o arquivo `.env.example` para `.env` e configure o banco de dados e outras variáveis de ambiente.
4. Execute as migrações: `php artisan migrate`
5. Inicie o servidor: `php artisan serve`

## Como Testar a API
Após configurar e iniciar o servidor, você pode testar a API utilizando ferramentas como Postman ou Insomnia. Aqui estão alguns pontos de entrada da API:

**Autenticação de Usuário:**

Método: POST

URL: http://localhost:8000/api/login

Corpo: JSON com email e senha do usuário

Exemplo de corpo da solicitação:

json
Copy code
{
    "email": "seu_email@example.com",
    "password": "sua_senha"
}
Exemplo de resposta bem-sucedida:

json
Copy code
{
    "token": "seu_token_de_autenticacao"
}
Este token será necessário para autenticar as demais solicitações.

**Listar Leads:**

Método: GET
URL: http://localhost:8000/api/leads
Cabeçalho: Authorization: Bearer <seu_token_de_autenticacao>
Adicionar Lead:

Método: POST

URL: http://localhost:8000/api/leads

Cabeçalho: Authorization: Bearer <seu_token_de_autenticacao>

Corpo: JSON com os detalhes do lead

Exemplo de corpo da solicitação:

json
Copy code
{
    "nome": "Nome do Lead",
    "email": "lead@example.com"
}
**Editar Lead:**

Método: PUT

URL: http://localhost:8000/api/leads/{id}

Cabeçalho: Authorization: Bearer <seu_token_de_autenticacao>

Corpo: JSON com os detalhes atualizados do lead

Exemplo de corpo da solicitação:

json
Copy code
{
    "nome": "Novo Nome do Lead",
    "email": "novo_lead@example.com"
}
**Excluir Lead:**

Método: DELETE
URL: http://localhost:8000/api/leads/{id}
Cabeçalho: Authorization: Bearer <seu_token_de_autenticacao>
Certifique-se de substituir http://localhost:8000 pela URL do seu ambiente local. Essas rotas requerem autenticação de usuário por meio da rota /api/login, que retorna um token de autenticação necessário para todas as demais solicitações. Certifique-se de incluir este token no cabeçalho Authorization no formato Bearer <seu_token_de_autenticacao> em todas as requisições posteriores.

## Testes Unitários

Os testes unitários são essenciais para garantir que diferentes partes do seu sistema funcionem conforme o esperado de forma isolada. No contexto deste projeto, os testes unitários abrangem as seguintes operações:

### Testes Realizados

1. **Listagem de Leads:**
   - Garante que a listagem de leads seja correta e contenha as informações esperadas.

2. **Exclusão de Leads:**
   - Verifica se a exclusão de leads é executada corretamente, removendo os registros do sistema.

3. **Edição de Leads:**
   - Testa se a edição de leads funciona conforme esperado, atualizando corretamente as informações no banco de dados.

4. **Adição de Leads:**
   - Certifica-se de que a adição de novos leads seja bem-sucedida, inserindo registros no sistema.

### Executando Testes Unitários

Para executar os testes unitários do Laravel, utilize o seguinte comando:

```bash
php artisan test

