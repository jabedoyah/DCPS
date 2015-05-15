<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
<div class="square">
    <form action="{$gvar.l_global}definir_dispositivo.php?option=add" method="post">
        <b>Definir dispositivo</b>
        <table width="30%" border="0" cellpadding="0" cellspacing="5">   
            <tbody>
                <tr>
                    <td><b>Ingrese el codigo del dispositivo</b></td>
                    <td>
                        <input type="text" name="codigo" />
                    </td>
                </tr>
                <tr>
                    <td><b>Ingrese el costo del dispositivo</b></td>
                    <td>
                        <input type="text" name="costo" /><br />
                    </td>
                </tr>
                <tr>
                    <td><b>Ingrese la funcion del dispositivo</b></td>
                    <td>
                        <input type="text" name="funcion" /><br />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name="prediseno">
                            <option>Seleccione el prediseño </option>
                            {section loop=$predis name=i }

                                <option value= {$predis[i]->get(codigo)}>{$predis[i]->get('codigo')}</option>                 
                            {/section}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>

                    <td class="cideaprediseno" id="idideaprediseno">
                        <select name="prediseno">
                            <option>Seleccione el prediseño </option>
                            {section loop=$predis name=i }

                                <option value= {$predis[i]->get(codigo)}>{$predis[i]->get('codigo')}</option>                 
                            {/section}
                        </select> 
                        
                    </td>
                </tr>
                <tr><td></td>
                    <td> <input class="btn btn-primary" type="submit" value="Definir dispositivo" /></td>
                </tr>
            </tbody>
        </table>

        <script>
            function myFunction() {
                //var x = $("#mySelect").val();
                $('#idideaprediseno').show();


            }
            $(document).ready(function () {
                $('.cideaprediseno').hide();

            });
        </script>

    </form>
</div>