<div class="container py-5">
    <div class="row">
        <div class="col-6">
            <?php for($i=0; $i<count($data->servicio); $i++) : ?> 
                <div class="row text-center justify-content-center serv-acordion">
                    <div class="col-12 border py-2 titulo">
                        <div class="row">
                            <div class="col-11">
                                <h4><?php echo $data->servicio[$i][0]; ?></h4>
                            </div>
                            <div class="col-1">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 contenido">
                        <img src="<?php echo SERVICIOS.'iconos/'.$i+1; ?>.png" alt="<?php echo $data->negocio; ?>" class="img-fluid" width="100" height="100">
                        <p><?php echo $data->servicio[$i][1]; ?></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>    
    </div>
</div>