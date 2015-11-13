<h1 class="title">Calificar parque</h1>
<form action="{$gvar.l_global}c_calificar_parque.php?option=calificar" method="post">
	<label for="codigo">Parque:{$nombre} </label><br>
	<label for="codigo">Parque:{$codigo} </label><br>
	<label for="nombre">Ingrese la calificacion del parque</label>
	<input id="calificacion" name="calificacion" type="text"/><br/>
	<input type="hidden" name="parque" value={$codigo}/>
	<input type="hidden" name="nombre" value={$nombre}/>
	<input type="hidden" name="option" value="calificar"/>
	<input class="btn btn-primary" type="submit" value="Calificar"/>
</form>