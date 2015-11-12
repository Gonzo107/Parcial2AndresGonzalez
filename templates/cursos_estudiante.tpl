<table>    
	<b>Matriculas del estudiante: {$estudiante->get('nombre')} con id: {$estudiante->get('id')}</b><br/><br/>    
  	{section loop=$estudiante->components['matricula']['e_m'] name=i}
		<b>Id Curso: </b> {$estudiante->components['matricula']['e_m'][i]->components['curso']['c_m'][0]->get('id')}<br/>
		<b>Nombre Curso: </b> {$estudiante->components['matricula']['e_m'][i]->components['curso']['c_m'][0]->get('nombre')}<br/>
		<b>Nota Final: </b> {$estudiante->components['matricula']['e_m'][i]->get('nota_final')}<br/><br/>
    {/section}
</table>