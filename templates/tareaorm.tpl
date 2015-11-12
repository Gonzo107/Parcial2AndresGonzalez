<div class="square">
{if isset($clerk1)}
<h1 class="title">Editar clerk</h1>
	<form action="{$gvar.l_global}tareaorm.php?option=editar" method="post">
	<label for="id">Ingrese el id del clerk: </label>
	<input id="id" name="id" type="text" value={$clerk1->get("id")}><br>
	<label for="id">Ingrese el nombre del clerk: </label>
	<input id="name" name="name" type="text" value={$clerk1->get("name")}><br>
	<label for="id">Ingrese el salario del clerk: </label>
	<input id="salary" name="salary" type="text" value={$clerk1->get("salary")}><br>
	<label for="id">Ingrese el jefe del clerk: </label>
	<input id="boss" name="boss" type="text" value={$clerk1->get("boss")}>	<br>
	<input type="hidden" name="option" vvalue="editar"/>
	<input type="hidden" name="id_v" value={$clerk1->get("id")}>
	<input class="btn btn-primary" type="submit" value="Editar"/>
</form>
{/if}
<h1 class="title">Buscar clerk</h1>
<form action="{$gvar.l_global}tareaorm.php?option=buscar" method="post">
	<label for="id">Ingrese el id del clerk: </label>
	<input id="id" name="id" type="text" placeholder="ID del clerk"/>	
	<input type="hidden" name="option" value="buscar"/>
	<input class="btn btn-primary" type="submit" value="Buscar"/>
</form>
</div>