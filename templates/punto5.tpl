<div class="square">
{if isset($canal)}
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Videos del canal: {$canal[0]->get("nombre")}</b></td>
</tr>
{section loop=$canal[0]->components["video"]["c_v"] name=i}
<tr>

	<td>
	<b>Titulo: </b>{$canal[0]->components["video"]["c_v"][i]->get("titulo")}<br>
	<b>Descripcion: </b>{$canal[0]->components["video"]["c_v"][i]->get("descripcion")}<br>
	<b>URL: </b>{$canal[0]->components["video"]["c_v"][i]->get("url")}<br>
	<b>Fecha de subida: </b>{$canal[0]->components["video"]["c_v"][i]->get("fecha_subida")}<br>
	</td>
</tr>
{/section}
	</table>
{/if}
<h1 class="title">Buscar canal</h1>
<form action="{$gvar.l_global}punto5.php?option=buscar" method="post">
	<label for="id">Ingrese el nombre del canal: </label>
	<input id="canal" name="canal" type="text" placeholder="Nombre del canal"
	{if isset($nombre_canal)}value="{$nombre_canal}"{/if}/><br/>
	
	<input type="hidden" name="option" value="buscar"/>
	<input class="btn btn-primary" type="submit" value="Buscar"/>
</form>
</div>