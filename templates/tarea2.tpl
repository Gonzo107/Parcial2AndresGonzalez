<h1>Lista de clerks</h1>
<table>
	<td><b>ID  </b></td>
	<td><b>name  </b></td>
	<td><b>salary  </b></td>
	<td><b>boss  </b></td>


{section name=i loop=$clerks}
<tr>
	<td>{$clerks[i]->get("id")}</td>
	<td>{$clerks[i]->get("name")}</td>
	<td>{$clerks[i]->get("salary")}</td>
	<td>{$clerks[i]->get("boss")}</td>
</tr>

{/section}
</table>
<br>
<H3>Mayor salario:</H3>{$mayor}<br>
<H3>Promedio salario:</H3>{$prom}<br>
