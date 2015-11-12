<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{if isset($ncampos)}
		
		<form action="{$gvar.l_global}TareaA.php" method="post">
			Por favor llene los siguientes campos. <br>
			{for $i=1 to $ncampos}
				{$i}.
				<input type="decimal" name="campos[]" required> <br>
			{/for}
			<input type="hidden" name="option" value="calcular" >
			<input type="submit" value="calcular" class="btn">
		</form>
	{elseif isset($prom)}
		Los numeros ingresados son: 
			{foreach $campos as $n}
				{$n} &nbsp;
			{/foreach}
		<br>
		La suma de los numeros es: {$suma}<br>
		El promedio es: {$prom} <br>
		<a class="btn" href="{$gvar.l_global}TareaA.php">Probar de nuevo</a>
	{else}
		<form action="{$gvar.l_global}TareaA.php" method="post">
			Nro de campos a crear: 
			<input type="number" name="ncampos" required min="1">
			<input type="hidden" name="option" value="crear_campos" ><br>
			<input type="submit" value="crear campos" class="btn" >
		</form>
	{/if}
</body>
</html>