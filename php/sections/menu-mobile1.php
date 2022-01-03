<div class="container-fluid menu-mobile1 d-block d-lg-none">
    <div class="row">
        <div class="col-4 py-2 text-center">
            <a href="tel:<?php echo $data->telefonos[0]['numero'] ?>">
                <h2><i class="fas fa-phone-alt"></i></h2>
            </a>
        </div>
        <div class="col-4 py-2 text-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#menu-modal">
                <h2><i class="fas fa-bars"></i></h2>
            </a>
        </div>
        <div class="col-4 py-2 text-center">
            <a href="mailto:<?php echo $data->correos[0]['correo'] ?>">
                <h2><i class="fas fa-envelope"></i></h2>
            </a>
        </div>
    </div>
</div>

<!-- Menu modal -->
<div class="modal fade" id="menu-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MENU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="col-12 text-center">
              <?php for($i=0; $i<count($data->paginas); $i++) : ?> 
                <a href="<?php echo $data->paginas[$i]['archivo']; ?>">
                    <h3 class="text-uppercase border"><?php echo $data->paginas[$i]['title']; ?></h3>
                </a>
              <?php endfor; ?>
          </div>
      </div>
    </div>
  </div>
</div>