<form action="{$gvar.l__global}Programar_reunion.php?option=agregar_reunion" method="post">
    <table>
        <tbody>
            <tr>
                <td>Ingrese el código de la reunion: </td>
                <td> <input name="codigo" type="text"></td>
            </tr>
            <tr>
                <td>Seleccione fecha de la reunion: </td>
                <td> <input name="fecha" type="date"></td>
            </tr>
            <tr>
                <td>Seleccionar idea:</td>
                <td><select name="ddl">
                        <option value=""> Seleccione idea</option>
                        {section loop=$ide name=i}
                            <option value= '{$ide[i]->get('nombre')}'> {$ide[i]->get('nombre')}</option>
                        {/section}

                    </select></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Programar reunion" name="reunion" /></td>

            </tr>

        </tbody>
    </table>
</form>
