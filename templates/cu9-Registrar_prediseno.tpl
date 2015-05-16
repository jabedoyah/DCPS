<form action="{$gvar.l__global}cu9-Registrar_prediseno.php?option=Agregar_prediseno" method="post">
<body>
    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ingrese el codigo del prediseño por favor: </td>
                <td><input type="text" name="codigo" /></td>
            </tr>
            <tr>
                <td>Seleccione la idea asociada a este prediseño</td>
                <td><select name="idea" value="{$ideas[i]->get('nombre')}">
                                {section loop=$ideas name=i }
                                    <option >{$ideas[i]->get('nombre')}</option>                 
                                {/section}
                        </select></td><br />
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" name="Registrar" /></td>
            </tr>
        </tbody>
    </table>
</body>
</form>