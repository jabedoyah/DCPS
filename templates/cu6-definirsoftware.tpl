<form action="{$gvar.l_global}cu6-definirsoftware.php?option=add" method="post">
  <p>
    <label for="select">Seleccione el predise�o:</label>
    <select name="select" >
    {section loop=$prediseno name=i}
    <option value={$prediseno[i]->get('codigo')}>{$prediseno[i]->get('codigo')}</option>
    {/section}
    </select>
  </p>
  <p>
    <label for="textfield2">Codigo para el software:</label>
    <input type="text" name="codigo">
</p>
  <p>
    <label for="textfield3">Definir lenguaje de programacion:</label>
    <input type="text" name="lenguaje">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Definir Software">
  </p>
</form>