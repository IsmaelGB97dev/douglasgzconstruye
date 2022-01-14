<div id="carouselExampleCaptions" class="carousel slide slider-1" data-bs-ride="carousel">
  <div class="carousel-inner position-relative">
    <?php for($i=0; $i<count($data->sliderText); $i++) : ?>
    <div class="carousel-item <?php echo ($i == 0)?'active':''; ?>" data-bs-interval="20000" >
      <img src="<?php echo SLIDER.$i+1;?>.jpg" class="lazyload d-none d-md-block w-100 img-fluid" alt="<?php echo $data->negocio; ?>" width="1300" height="300" >

      <img src="<?php echo SLIDERMIN.$i+1;?>.jpg" class="lazyload d-block d-md-none w-100 img-fluid" alt="<?php echo $data->negocio; ?>" width="500" height="500">

      <div class="carousel-caption">
        <h5 class="d-none d-md-block t-shadow1-dark"><?php echo $data->sliderText[$i]; ?></h5>
        <h6 class="d-block d-md-none t-shadow1-dark"><?php echo $data->sliderText[$i]; ?></h6>
        <p class="pt-2"><a class="btn btn-success bg-color1" href="<?php echo $data->paginas[4]['archivo']; ?>"><?php echo $data->cta[0]; ?></a></p>
      </div>
    </div>
    <?php endfor; ?>

    <!-- <div class="carousel-item">
      <img src="<?php echo IMG;?>slider/1.jpg" class="lazyload d-none d-md-block w-100 img-fluid" alt="<?php echo $data->negocio; ?>" width="1300" height="300" >

      <img src="<?php echo IMG;?>slider/min/1.jpg" class="lazyload d-block d-md-none w-100 img-fluid" alt="<?php echo $data->negocio; ?>" width="500" height="500">

      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>