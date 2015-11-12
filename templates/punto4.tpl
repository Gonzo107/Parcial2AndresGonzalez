<div class="square">
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Canales</b></td>
</tr>
{section loop=$canal name=i}
<tr>
	<td>
	<b>Nombre:</b>{$canal[i]->get("nombre")}<br>
	
	<b>E-Mail:</b>{$canal[i]->get("e_mail")}<br>
	<b>Descripcion:</b>{$canal[i]->get("descripcion")}<br>
	</td>
</tr>
{/section}
	</table>
</div>
