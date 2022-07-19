# api_emprestimo_livros
Api feita em laravel (Repository patterns)

<h1>Explicação do código</h1>

<p>Esse projeto tem a intenção de criar um sistema com o modelo Repository</p>

<p>Basicamente, todo o crud foi implementado em um BaseRepository, este é responsável por toda a comunicação com o banco</p>
<p>Toda Model criada terá que ter sua respectiva classe Repository, que vai extender a classe BaseRepository</p>
<p>Toda Model vai deve ter seu Controller que extende de um BaseController</p>
<p>O ganho nesse modelo é que quando definimos as rotas como <i>apiResource</i> não precisamos implementar nenhum método do crud no Controller referente à model.</p>
<p></p>
