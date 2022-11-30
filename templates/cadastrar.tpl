{extends file="layout.tpl"}
{block name=main}

{$msg}
	  <h4 class="mt-1 display-4" style="font-size: 40px;">Login</h4>
<div class="container">
  <div class="row">
	<div id="sobre" class="col-md-8">
	<div class="container">
	  <form action="cadastrar.php" method="POST">
	    <label for="Login">Cadastramento de usuários</label>
	    <input type="text" id="Login" name="login" required>

	    <label for="senha">Senha</label>
	    <input type="password" id="senha" name="senha" required>

	    <label for="senha">Nome</label>
	    <input type="text" id="nome" name="nome" required>

	    <label for="email">E-Mail</label>
	    <input type="text" id="email" name="email" required>
	   <br> 
	   <br> 
	    <input type="submit" name="submit" value="Submit">
	  </form>
	</div>

	</div>
  </div>
</div>
</div>

{/block}
