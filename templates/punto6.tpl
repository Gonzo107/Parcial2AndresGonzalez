<div class="square">
{if isset($video)}
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Titulo: </b>{$video[0]->get("titulo")}<br>
	<b>Descripcion: </b>{$video[0]->get("descripcion")}<br>
	<b>Fecha de subida: {$video[0]->get("fecha_subida")}</b>{$video[0]->get("descripcion")}<br>
</td>
</tr>

	</table>
{/if}
<h1 class="title">Buscar canal</h1>
<form action="{$gvar.l_global}punto6.php?option=buscar" method="post">
	<label for="id">Ingrese la url del video: </label>
	<input id="url" name="url" type="text" placeholder="Url del video"
	
	
	<input type="hidden" name="option" value="buscar"/>
	<input class="btn btn-primary" type="submit" value="Buscar"/>
</form>
</div>