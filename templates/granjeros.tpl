<div class="square">
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Granjeros</b></td>
</tr>
{section loop=$granjero name=i}
<tr>
	<td>
	<b>Id:</b>{$granjero[i]->get("id")}<br>
	<b>Nombre:</b><a href="{$gvar.l_global}granjeroyfinca.php?granjero={$granjero[i]->get("id")}">{$granjero[i]->get("nombre")}</a><br>
	<b>Edad:</b>{$granjero[i]->get("edad")}<br>
	<b>Sexo:</b>{$granjero[i]->get("sexo")}<br>
	</td>
</tr>
{/section}
	</table>
</div>
