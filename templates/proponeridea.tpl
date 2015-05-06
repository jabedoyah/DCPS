<div class="col-md-4 col-md-offset-3 fondo tr">
<form action="{$gvar.l_global}proponeridea.php?option=add" method="post">
  <p>
    <label for="textfield">Nombre de idea:</label>
    <input class="form-control" type="text" name="nombre">
  </p>
  <p><b>Descripción</b></p>
  <p>
    <textarea class="form-control" name="descripcion" cols="40" rows="10"></textarea>
  </p>
  <p>
    <label for="select">Necesidad:</label>
    <select  class="form-control" name="necesidad">
    <option > Seleccione necesidad</option>
    {section loop=$necesidad name=i}
    <option value="{$necesidad[i]->get('codigo')}">{$necesidad[i]->get('nombre')}</option>
    {/section}
    </select>
  </p>
  <p>
    <input class="btn-default" type="submit" name="submit" value="Enviar">
    <input class="btn-default" type="reset" name="reset" value="Cancelar">
  </p>
</form>
</div>
<div class="col-md-3">

</div>
</div>