<?php
    include ("conexion.php");
    $conexion = conexion();

    $sql = "SELECT * FROM tareas";

    $query = mysqli_query($conexion, $sql); 
   
    include "header.php";
?>


<header>   
    <div class="cej-banner text-end">
    <a name=""></a>
    </div>
</header>


<!--                TABLA DE TIEMPO                -->
<!--    TERCER PROTOTIPO TABLAS CON BD CON JS      -->
<main>    
    <h2>TIEMPOS</h2>
    <a name="tiempo"></a> 
    <button id="date_today" type="button" class="btn btn-primary mb-3"></button>
 
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 bg-light p-1"> 
                    <form action="" method="">
                        <div class="cj-lista table-responsive">
                            <table class="table table-info table-striped table-hover m-3">
                                <thead>
                                        <th>Ocupación</th>
                                        <th>Lunes</th>  
                                        <th>Martes</th>  
                                        <th>Miercoles</th>
                                        <th>Jueves</th>  
                                        <th>Viernes</th>
                                        <th>Sabado</th>
                                        <th>Domingo</th>                  
                                </thead>
                                    <tbody>
                                        <?php
                                        while($fila=mysqli_fetch_assoc($query)){                                
                                        ?>
                                        <tr>
                                            <?php if($fila["operativa"]=="si"){?>
                                            <td>
                                                <input type="text" name="tarea" id="tarea" placeholder="" value="<?php 
                                                echo $fila["nombre_tarea"];
                                                 ?>" class="cej_col_day tareas" min="0" disabled>
                                            </td>
                                            <td>
                                                <input type="number" name="lunes" id="dia_1" placeholder="" value="<?php 
                                                echo $fila["dia 1"];
                                                 ?>" class="cej_col_day dia_1 <?php 
                                                 echo $fila["nombre_tarea"];
                                                  ?> " min="0">
                                            </td> 
                                            <td>
                                                <input type="number" name="martes" id="dia_2" placeholder="" value="<?php 
                                                echo $fila["dia 2"];?>" class="cej_col_day dia_2 <?php 
                                                echo $fila["nombre_tarea"];
                                                 ?> " min="0">
                                            </td>
                                            <td>
                                                <input type="number" name="miercoles" id="dia_3" placeholder="" value="<?php echo $fila["dia 3"]; ?>" class="cej_col_day dia_3 <?php 
                                                echo $fila["nombre_tarea"];
                                                 ?> " min="0">
                                            </td>
                                            <td>
                                                <input type="number" name="jueves" id="dia_4" placeholder="" value="<?php echo $fila["dia 4"]; ?>" class="cej_col_day dia_4 <?php 
                                                echo $fila["nombre_tarea"];
                                                 ?> " min="0">
                                            </td>
                                            <td>
                                                <input type="number" name="viernes" id="dia_5" placeholder="" value="<?php echo $fila["dia 5"];?>" class="cej_col_day dia_5 <?php 
                                                echo $fila["nombre_tarea"];
                                                 ?> " min="0">
                                            </td>
                                            <td>
                                                <input type="number" name="sabado" id="dia_6" placeholder="" value="<?php echo $fila["dia 6"]; ?>" class="cej_col_day dia_6 <?php 
                                                echo $fila["nombre_tarea"];
                                                 ?> " min="0">
                                            </td>
                                            <td>
                                                <input type="number" name="domingo" id="dia_7" placeholder="" value="<?php echo $fila["dia 7"]; ?>" class="cej_col_day dia_7 <?php 
                                                echo $fila["nombre_tarea"];
                                                 ?> " min="0">
                                            </td>
                                            
                                             <?php ;}else{ $nop[]= $fila;
                                            } ?>  <!--  Cierre del if - operativa -->
                                        </tr>
                                        <!-- Armado informacion para uso posterior -->
                                            <?php   
                                            if($fila["operativa"]=="si"){
                                                $tareas[]= $fila["nombre_tarea"];
                                                $descrip[]=["nombre_tarea"=>$fila["nombre_tarea"],"descripcion_tarea"=>$fila["descripcion_tarea"]];
                                            }
                                            // $descrip[]=["nombre_tarea"=>$fila["nombre_tarea"],"descripcion_tarea"=>$fila["descripcion_tarea"]];
                                            $t_count=count($tareas);  // sin uso 

                                            ?>
                                        <!--  -->
                                        <?php } ?>                
                                </tbody>
                                <tfoot>
                                            <td class="table-danger"><small>
                                                OPERATIVAS</small>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="lunes" id="t_dia_1" placeholder="0" value="" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="martes" id="t_dia_2" placeholder="" value="" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="miercoles" id="t_dia_3" placeholder="" value="" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="jueves" id="t_dia_4" placeholder="" value="" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="viernes" id="t_dia_5" placeholder="" value="" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="sabado" id="t_dia_6" placeholder="" value="" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-danger">
                                                <input type="number" name="domingo" id="t_dia_7" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            </tfoot>
                                            </table>

                                            
                                            <!-- HS NO OPERATIVAS -->
                                            <table class="table table-info table-striped table-hover m-3">
                                            <tbody class="table-success">
                                                <?php foreach($nop as $no){?>
                                                <tr>    
                                                    <td>
                                                    <input type="text" name="" id="" placeholder="" value="<?php 
                                                    echo $no["nombre_tarea"];
                                                     ?>" class="cej_col_day nop_tareas" min="0" disabled>    
                                                    </td>
                                                    <td>
                                                    <input type="number" name="lunes" id="nop_dia_1" placeholder="" value="<?php 
                                                    echo $no["dia 1"];
                                                    ?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td> 
                                                    <td>
                                                    <input type="number" name="martes" id="nop_dia_2" placeholder="" value="<?php 
                                                    echo $no["dia 2"];?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td>
                                                    <td>
                                                    <input type="number" name="miercoles" id="nop_dia_3" placeholder="" value="<?php echo $no["dia 3"]; ?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td>
                                                    <td>
                                                    <input type="number" name="jueves" id="nop_dia_4" placeholder="" value="<?php echo $no["dia 4"]; ?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td>
                                                    <td>
                                                    <input type="number" name="viernes" id="nop_dia_5" placeholder="" value="<?php echo $no["dia 5"];?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td>
                                                    <td>
                                                    <input type="number" name="sabado" id="nop_dia_6" placeholder="" value="<?php echo $no["dia 6"]; ?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td>
                                                    <td>
                                                    <input type="number" name="domingo" id="nop_dia_7" placeholder="" value="<?php echo $no["dia 7"]; ?>" class="cej_col_day <?php 
                                                    echo $no["nombre_tarea"];
                                                    ?> nop_dias" min="0">
                                                    </td>
                                                </tr>    
                                                <?php }?>
                                            </tbody>    
                                            <tfood>
                                            <td class="table-dark"><small>
                                                TOTAL</small>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="lunes" id="t_dia_1" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="martes" id="t_dia_2" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="miercoles" id="t_dia_3" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="jueves" id="t_dia_4" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="viernes" id="t_dia_5" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="sabado" id="t_dia_6" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>
                                            <td class="table-dark">
                                                <input type="number" name="domingo" id="t_dia_7" placeholder="" value="0" class="cej_col_day" disabled>
                                            </td>

                                            </tfood>    
                                            </table>     
                        </div>
                    </form> 
                </div>
                <div class="col-12 col-md-4 bg-light card p-5">
                    <img class="card-img-bottom" src="img/calendario.png"> 
                </div> 
            </div> <!-- cierre del row -->    
        </div> <!-- cierre del container -->

</main>
<!--        SEGUNDO TAREAS CON BD EN MAIN           -->
<section class="second_bg">
    <h2>CONTRATOS</h2>
    <a name="proyectos"></a>
    <div class="container">
        <div class="row">
            <?php
                foreach($descrip as $d){
                // var_dump($d["nombre_tarea"]);
                ?>
                    <div class="col">
                        <!-- Vs ultima - mejorando descrip con dropdown -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-warning btn-lg m-1 btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">  
                            <?php echo $d["nombre_tarea"];?>
                            </button>
                            <div class="dropdown-menu cej-div-des">
                                <li class="cej-pad-tarea">Contrato</li>
                                <p id="descrip_tarea" class=""><?php 
                                    echo $d["descripcion_tarea"];?>
                                </p>
                                <li><hr class="dropdown-divider"></li>
                                <!-- Es función del Administrador Alfa -->
                                <li><a class="dropdown-item disabled" href="#">Modificar</a></li>
                                <li><a class="dropdown-item disabled" href="#">Eliminar</a></li>
                            </div>   
                         </div> <!-- cierre del dropdown -->
                    </div> <!-- cierre del col -->
            <?php }?>
        </div>  <!-- cierre del row -->        
        <!-- PRIMER PROTOTIPO BOTONES SIN JS -->
        <!-- Agregar Contratos es función del Administrador Alfa -->
        <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <button class="btn btn-danger" type="button">Agregar Proyecto</button>
        </div>
    </div>    
</section>  
<!--                GRAFICO SEMANAL                  -->
<!--        SEGUNDO PROTOTIPO GRAFICOS CON BD       -->
<section>
<h2>GRAFICOS</h2>
    <a name="graficos"></a>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 bg-light p-1">
                <button id="actualizarGrafico" style="width:100%;" type="button" class="btn btn-info btn-sm mb-5">ACTUALIZAR</button>
                 <!-- Busca las tareas y trae horas con JS    -->
                <?php 
                // var_dump($tareas);            
                    foreach ($tareas as $tarea){
                 ?>
                    <div class="progress mb-3">
                    <p class="cej-label">
                    <?php echo $tarea; ?> 
                    </p>                    
                    <div class="progress-bar" id=<?php echo "'".$tarea."'";?> role="progressbar" style="width: 10%" aria-valuenow="0" aria-valuemin="" aria-valuemax="100"></div>                    
                    </div>
                <?php  } ?> 
            </div>
            <div class="col-12 col-md-6 bg-light card p-3">
                <div class="card-header">
                    <h5 class="card-title">Tu semana en Nros.!</h5>
                </div>
                <div class="card-body">
                    <table class="table">  
                        <tr class="">
                            <td>
                            Horas Operativas Diarias Promedio:</td>            
                            <td>7 horas</td>
                        </tr>
                        <tr class="">
                            <td>Mayor Hs Prom. Diarias: </td>
                            <td>5 horas - Familia</td>
                        </tr>
                        <tr class="">
                            <td>Menor Hs Prom. Diarias:</td>
                            <td> 1 horas - Deporte</td>
                        </tr>
                    </table>
                </div>    
                <div class="card-footer text-center bg-transparent">
                    <a href="#tiempo" class="btn btn-danger"> Warning! Amigos no tiene horas</a>                    
                </div>                        
            </div>
        </div>
    </div>
</section>

<script>
    function descripTarea() {
    document.getElementById("descrip_tarea").style.display="unset";
    }
</script>
<script>
    let fecha_hoy= new Date();
    document.getElementById("date_today").innerHTML=fecha_hoy.toDateString();
</script>

<?php
include "footer.php";
?>