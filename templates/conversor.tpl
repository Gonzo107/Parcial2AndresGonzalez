<div class="square">
{if isset($resultado)}
	<p><b>El resultado es: </b>{$resultado}</p>
{/if}
<h1 class="title">Conversor de Divisas</h1>
<form action="{$gvar.l_global}conversor.php?option=conversion" method="post">
	<label for="id">Ingrese la tasa de conversión: </label><input id="tasa" name="tasa" type="text" placeholder="Tasa de Conversion"
	{if isset($tasa)}value="{$tasa}"{/if}/><br/>
	<label for="usd">Ingrese el valor en Dólares a convertir: </label>
	<input id="usd" name="dolares" type="text" placeholder="Dolares" 
	{if isset($dolares)}value="{$dolares}"{/if}/><br/>
	<input type="hidden" name="option" value="conversion"/>
	<input class="btn btn-primary" type="submit" value="Conversion"/>
</form>
</div>