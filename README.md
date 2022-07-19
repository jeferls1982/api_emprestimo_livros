# api_emprestimo_livros
Api feita em laravel (Repository patterns)

<h1>Explicação do código</h1>

<p>Esse projeto tem a intenção de criar um sistema com o modelo Repository</p>

<p>Basicamente, todo o crud foi implementado em um BaseRepository, este é responsável por toda a comunicação com o banco</p>
<p>Toda Model criada terá que ter sua respectiva classe Repository, que vai extender a classe BaseRepository</p>
<p>Toda Model vai deve ter seu Controller que extende de um BaseController</p>
<p>O ganho nesse modelo é que quando definimos as rotas como <code>apiResource</code> não precisamos implementar nenhum método do crud no Controller referente à model.</p>
<p>Para garantir que funcione, o BaseController precisa implementar a interface referente ao repository.</p>
<p>No caso de rotas que necessitem de tratamento conforme o modelo de negócio específico, deve ser criada a rota normalmente, criar o método no controller e interceptar essa função em um Service correspondente à model, é nele que a logica deve ser implementada para manter uma organização do código. E por fim, esse service chama o repository que vai se comunicar com o banco.</p>

<p>A resposta da requisição termina com a resource referente à model. Nela é configurado apenas as variáveis que a API vai retornar de acordo com a requisição.</p>
