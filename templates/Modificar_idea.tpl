
<div class="col-md-4 col-md-offset-3 modificar_idea">
    <body>    
        <form action="{$gvar.l__global}Modificar_idea.php?option=Modificaridea" method="post">

            <p class="modificar_p letra"><b>Modificar idea:</b></p>
            <select class="form-control" name="ddl" id="mySelect" onchange="myFunction()" >
                                <option>Seleccione idea</option>
                                {section loop=$ide name=i }

                                    <option value= {$ide[i]->get('nombre')}>  {$ide[i]->get('nombre')}</option>                 
                                {/section}

                            </select>
                            <div class="des" id="desc">
                                <p class="letra"><b>Descripcion actual :</b></p>
                            {section loop=$ide name=i }
                                <a  class="idea_descripcion letra1" id="idea_descripcion_{$ide[i]->get('nombre')}" ><b> {$ide[i]->get('descripcion')}</b></a>              
                            {/section}

                            <br/>
                            <br/>

                            <a class="letra"><b>Nueva descripcion:</b></a> </br>

                            <textarea id="textAread_id" name = "descripcion" rows = "8" cols = "40" class = "form-control" WRAP ></textarea> </br>
                            <!-- <input type="button" onclick="val()" value="Modificar">   -->
                            <input class="btn-default" type="submit" value="Modificar" />

                            </div>
            <!--
                        <script>
                            function val()
                            {
                                if (document.getElementById("textAread_id").value == null || document.getElementById("textAread_id").value == "")
                                    alert("El campo: 'Nueva descripcion esta vacio'.")
                                else
                                        act Modificar_idea.php?option = pr
                            }
                        </script>
            
            -->




            <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('.idea_descripcion').hide();
                    $('#idea_descripcion_' + x).show();

                    $('.des').hide();
                    $('#desc').show();

                    $('.des1').hide();
                    $('#desc1').show();

                }
                $(document).ready(function () {
                    $('.idea_descripcion').hide();
                    $('.des').hide();
                    $('.des1').hide();
                });
            </script>
        </form>
    </body>

</div>
<div class="col-md-3">

</div>
</div>