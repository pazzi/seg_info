{extends file="layout.tpl"}
{block name=main}
<center>
<h1>Lists das tabelas login e cartões</h1>
</center>
<br>
<br>
{$msg}
<h3>Tabelas de logins com senha SHA1</h3>
<table class="table">
<thead>
<tr>
<th>Login</th><th>Senha</th><th>Email</th><th>Nome</th>
</tr>
</thead>
   {section name=k loop=$usuarios}
        <tr>
        <td> {$usuarios[k].login} </td><td> {$usuarios[k].senha} </td><td>  {$usuarios[k].email} </td><td> {$usuarios[k].nome} </td>
        </tr>
{/section}
</table>

<br>
<br>
<hr>
<br>

<h3>Tabelas de cartões com dados criptografados</h3>
<table class="table">
<thead>
<tr>
<th>Titular</th><th>Número</th><th>Validade</th><th>Código Segurança</th>
</tr>
</thead>
   {section name=i loop=$cartoes}
        <tr>
        <td> {$cartoes[i].titular} </td><td>  {$cartoes[i].numero} </td><td>  {$cartoes[i].validade} </td><td>  {$cartoes[i].codigo_seguranca} </td>
        </tr>
{/section}
</table>

<br>
<br>
<hr>
<br>

<h3>Tabelas de cartões com dados descriptografados</h3>
<table class="table">
<thead>
<tr>
<th>Titular</th><th>Número</th><th>Validade</th><th>Código Segurança</th>
</tr>
</thead>
   {section name=l loop=$decriptografado}
        <tr>
        <td> {$decriptografado[l].titular} </td><td>  {$decriptografado[l].numero} </td><td>  {$decriptografado[l].validade} </td><td>  {$decriptografado[l].codigo_seguranca} </td>
        </tr>
{/section}
</table>
{/block}


