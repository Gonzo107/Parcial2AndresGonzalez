<h1 class="title">Agregar Parque</h1>
<form action="{$gvar.l_global}c_agregar_parque.php?option=agregar" method="post">
	<label for="codigo">Ingrese el codigo del parque </label>
	<input id="codigo" name="codigo" type="text"/><br/>
	<label for="nombre">Ingrese el nombre del parque</label>
	<input id="nombre" name="nombre" type="text"/><br/>
	<label for="nombre">Ingrese el municipio del parque</label>
	<input id="municipio" name="municipio" type="text"/><br/>
	<label for="nombre">Ingrese el nivel del parque</label>
	<input id="nivel" name="nivel" type="text"/><br/>
	<input type="hidden" name="option" value="agregar"/>
	<input class="btn btn-primary" type="submit" value="Agregar"/>
</form>