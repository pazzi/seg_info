{extends file="layout.tpl"}
{block name=main}

{$msg}
 <h4 class="mt-1 display-4" style="font-size: 40px;">Cadastrar Cartões</h4>
<div class="container">
  <div class="row">
	<div id="sobre" class="col-md-8">
	<div class="container">
	  <form action="cad_cartao.php" method="POST">
	    <label for="titular">Titular</label>
	    <input type="text" id="titular" name="titular" required>

	    <label for="numero">Número</label>
	    <input type="text" id="numero" name="numero" required>

	    <label for="validade">Validade(mm/aa)</label>
	    <input type="text" id="validade" name="validade" required>

	    <label for="codigo">Código de Segurança</label>
	    <input type="text" id="codigo" name="codigo_seguranca" required>
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
