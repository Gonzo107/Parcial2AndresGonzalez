<div class="square">
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Personas a cargo del jefe:{$boss->get("name")} - con id: {$boss->get("id")}</b></td>
</tr>
{section loop=$boss->components["clerk"]["b_c"] name=i}
<tr>
	<td>
	<b>Id:</b>{$boss->components["clerk"]["b_c"][i]->get("id")}<br>
	<b>Nombre:</b>{$boss->components["clerk"]["b_c"][i]->get("name")}<br>
	<b>Salario:</b>{$boss->components["clerk"]["b_c"][i]->get("salary")}<br>
	</td>
</tr>
{/section}
	</table>
</div>
