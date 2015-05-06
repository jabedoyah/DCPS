<form action="{$gvar.l_global}definirsoftware.php?option=add" method="post">
    <p>
        <label for="select">Seleccione el prediseno:</label>


        <select name="prediseno" >
            <option value="prediseno">Prediseno</option>
            {section loop=$prediseno name=i}
                <option value={$prediseno[i]->get('Codigo')}>{$prediseno[i]->get('Codigo')}</option>
            {/section}
        </select>


    </p>
    <p>
        <label for="textfield2">Codigo para el software:</label>
        <input type="text" name="codigo">
    </p>
    <p>
        <label for="textfield3">Definir lenguaje de programacion:</label>

        <select name="lenguaje" >
            <option value="lenguaje">lenguaje</option>
            <option value="C++" >C++</option>
            <option value="C#" >C#</option>
            <option value="Java" >Java</option>
            <option value="Ruby" >Ruby</option>

        </select>

    </p>
    <p>
        <input type="submit" name="submit" id="submit" value="Definir Software">
    </p>
</form>