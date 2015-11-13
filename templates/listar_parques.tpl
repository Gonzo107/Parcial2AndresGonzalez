<table border="1" cellpadding="5" style="border-collapse:collapse">

<tr>
        <th>Codigo</td>
        <th>Nombre</td>
        <th>Municipio</td>
       
        
        
    </tr>
{section loop=$parque name=i}
    <tr>
        <td>{$parque[i]->get("codigo")}</td>
        <td><a href="{$gvar.l_global}c_calificar_parque.php?parque={$parque[i]->get("codigo")}&nparque={$parque[i]->get("nombre")}">{$parque[i]->get("nombre")}</a></td>
        <td>{$parque[i]->get("municipio")}</td>
        
        
    </tr>
    {/section}
  

</table>