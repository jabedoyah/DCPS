<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}Modificar_idea_prueba.php?option=Modificaridea" method="post">

            Modificar idea:
            <select name="ddl" id="mySelect" onchange="myFunction()" >
                <option > Seleccione idea</option>
                {section loop=$ide name=i }

                    <option value= {$ide[i]->get('nombre')}>  {$ide[i]->get('nombre')}</option>             
                {/section}
            </select>   </br> 


            <select id="Myid" onchange="myFunction()">
                <option>Seleccione opcion</option>
                <option value="Ond">Onda</option>
                <option value="Sub">Subaru</option>
            </select>


            <section class="cprueba" id="idprueba">
                <a>Seleccionó esto</a>
                <a class="clas_select" id="id_select{"Ond"}">Onda</a>
                <a class="clas_select" id="id_select{"Sub"}">Subaru</a>
            </section>  

            <section class="clase_descripcion" id="id_descripcion">
                <a > Descripcion actual :</a>  </br>             

                {section loop=$ide name=i }
                    <a  class="idea_descripcion" id="idea_descripcion_{$ide[i]->get('nombre')}">{$ide[i]->get("descripcion")}</a>                           
                {/section}</br>  
                <a>Nueva descripcion:</br>

                    <textarea  id="textAread_id" name = "descripcion" rows = "8" cols = "40" class = "input" WRAP ></textarea> </br>
                    <input type="submit" value="Modificar" /> </br>             
                </a> 
            </section>
            <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    var a = $("#Myid").val();
                    $('#idprueba').show();
                    $('#id_select' + a).show();

                    $('#id_descripcion').show();
                    $('#idea_descripcion_' + x).show();
                }
                $(document).ready(function () {
                    $('.cprueba').hide();
                    $('.clas_select').hide();

                    $('.clase_descripcion').hide();
                    $('.idea_descripcion').hide();


                });
            </script>
        </form>
    </body>
</html>