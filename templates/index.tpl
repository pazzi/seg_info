{extends file="layout.tpl"}
{block name=main}

{$msg}
<div class="container">
  <div class="row">
	<div id="sobre" class="col-md-6">
	  <h4 class="mt-1 display-4" style="font-size: 40px;">Login</h4>
	<div class="container">
	  <form action="index.php" method="POST">
	    <label for="Login">Login</label>
	    <input type="text" id="Login" name="login" required>

	    <label for="senha">Senha</label>
	    <input type="password" id="senha" name="senha" required>
	   <br> 
	   <br> 
	    <input type="submit" name="submit" value="Submit">
	  </form>
	</div>

	</div>
  </div>
</div>

{/block}
