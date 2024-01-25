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

## Contribuições
Contribuições são bem-vindas. Sinta-se à vontade para relatar problemas, enviar solicitações de pull e contribuir para melhorias.

## Licença
Este projeto é distribuído sem uma licença específica.

## Contato
Para mais informações, entre em contato em [csouzatech@gmail.com](mailto:csouzatech@gmail.com).
