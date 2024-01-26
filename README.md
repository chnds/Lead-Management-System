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
Após configurar e iniciar o servidor, você pode testar a API usando ferramentas como [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/). Aqui estão alguns pontos de entrada da API:

- **Listar Leads:**
  - Método: GET
  - URL: `http://localhost:8000/api/leads`

- **Adicionar Lead:**
  - Método: POST
  - URL: `http://localhost:8000/api/leads`
  - Corpo: JSON com os detalhes do lead

- **Editar Lead:**
  - Método: PUT
  - URL: `http://localhost:8000/api/leads/{id}`
  - Corpo: JSON com os detalhes atualizados do lead

- **Excluir Lead:**
  - Método: DELETE
  - URL: `http://localhost:8000/api/leads/{id}`

Certifique-se de substituir `http://localhost:8000` pela URL do seu ambiente local.

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

## Contato
Para mais informações, entre em contato em [csouzatech@gmail.com](mailto:csouzatech@gmail.com).
