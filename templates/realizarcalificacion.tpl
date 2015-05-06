<div class="col-md-4 col-md-offset-3 fondo tr">
    <body>    
        <form action="{$gvar.l__global}realizarcalificacion.php?option=calificar" method="post">

            Realizar Calificacion:
                <select class="form-control" name="idea" id="mySelect" onchange="myFunction()" >
                                <option > Seleccione idea</option>
                                {section loop=$idea name=i }

                                    <option value= {$idea[i]->get('nombre')}>  {$idea[i]->get('nombre')}</option> 
                                                   
                                {/section}

                            </select>

                            <a  class="des" id="desc"> Descripcion:</a> 
     
                            {section loop=$idea name=i }
                                <a  class="idea_descripcion" id="idea_descripcion_{$idea[i]->get('nombre')}" > {$idea[i]->get('descripcion')}</a>                 
                            {/section}


                            <a  class="nec" id="nece"> Necesidad:</a> 
  
                            {section loop=$idea name=i }
                                <a  class="idea_necesidad" id="idea_necesidad_{$idea[i]->get('nombre')}" > {$idea[i]->get('necesidad')}</a>                 
                            {/section}


                    
                        <div class="des1" id="desc1">
                            <a>Califique la idea:</a> </br>

                            1   <input type="radio" name="calificacion" value="1"> 2   <input type="radio" name="calificacion" value="2"> 3   <input type="radio" name="calificacion" value="3"> 4   <input type="radio" name="calificacion" value="4"> 5   <input type="radio" name="calificacion" value="5"></br>
                            <!-- <input type="button" onclick="val()" value="Calificar">   -->
                            <input class="btn-default" type="submit" value="Calificar" />
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
                    
                    $('.idea_necesidad').hide();
                    $('#idea_necesidad_' + x).show();

                    $('.nec').hide();
                    $('#nece').show();

                    $('.des1').hide();
                    $('#desc1').show();
                    
                    

                }
                $(document).ready(function () {
                    $('.idea_descripcion').hide();
                    $('.des').hide();
                     $('.idea_necesidad').hide();
                    $('.nec').hide();
                    $('.des1').hide();
                });
            </script>
        </form>
    </body>
</div>
<div class="col-md-3">

</div>
</div>
                            
                           