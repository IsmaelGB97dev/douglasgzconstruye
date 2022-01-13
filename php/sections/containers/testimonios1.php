<div class="container py-5 testimonials-1">
    <div class="row">
        <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="row">
                        <div class="col-12">
                            <em class="t-color3">Testimonials</em>
                        </div>
                        <div class="col-7">
                            <h3>What People Say</h3>
                        </div>
                        <div class="col-5 text-center">
                            <span class="btn btn-succes" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span class="btn btn-succes" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                    <div class="carousel-inner pt-5">
                      <?php for($i=0; $i<count($data->testimonial); $i++) : ?>
                      <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                        <em><?php echo $data->testimonial[$i][0]; ?></em>
                        <div class="row pt-4">
                            <div class="col-2 foto">
                                <img src="<?php echo SERVICIOS.'iconos/'.$i+1; ?>.png" class="img-fluid" width="55" height="55" alt="testimonio">
                            </div>
                            <div class="col-10">
                                <h6><?php echo $data->testimonial[$i][1]; ?></h6>
                                <em class="t-color3"><?php echo $data->testimonial[$i][2];?></em>
                            </div>
                        </div>
                      </div>
                      <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="col-6 text-center">
            <img src="<?php echo IMG; ?>testimonials.jpg" class="img-fluid" alt="foto" width="400" height="600">
        </div>
    </div>
</div>