<div class="square">
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
{section loop=$granjero name=j}
<tr>
	
	<td><b>Fincas del granjero:{$granjero[j]->get("nombre")} - con id: {$granjero[j]->get("id")}</b></td>
</tr>
{if count($granjero[j]->components["finca"]["g_f"]) eq 0}
<tr>
<td><b>Este granjero no tiene fincas</b></td>
</tr>
{/if}
{section loop=$granjero[j]->components["finca"]["g_f"] name=i}
<tr>
	<td>
	<b>Id:</b>{$granjero[j]->components["finca"]["g_f"][i]->get("id")}<br>
	<b>Nombre:</b>{$granjero[j]->components["finca"]["g_f"][i]->get("nombre")}<br>
	<b>Valor:</b>{$granjero[j]->components["finca"]["g_f"][i]->get("valor_propiedad")}<br>
	<b>Gallinas:</b>{$granjero[j]->components["finca"]["g_f"][i]->get("cantidad_gallinas")}<br>
	<b>Vacas:</b>{$granjero[j]->components["finca"]["g_f"][i]->get("cantidad_vacas")}<br>
	</td>
</tr>
{/section}
{/section}


	</table>
	<a href="http://localhost/glight/granjeros.php">Volver a los granjeros</a>
</div>
