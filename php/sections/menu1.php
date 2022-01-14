<!-- <div class="sticky-top"> -->
    <div class="container-fluid d-none d-md-block">
        <div class="container">
            <div class="row py-1 px-3 justify-content-center text-center align-items-center">
                <div class="col-md-4 col-lg-3">
                    <a class="text-dark fw-bold" href="tel:<?php echo $data->telefonos[0]['numero']; ?>">
                        <i class="fas fa-phone-alt text-dark"></i>
                        <span><?php echo $data->telefonos[0]['numero']; ?></span>
                    </a>
                </div>
                <div class="col-md-7 col-lg-5">
                    <a class="text-dark fw-bold" href="mailto:<?php echo $data->correos[0]['correo']; ?>">
                        <i class="fas fa-envelope text-dark"></i>
                        <span><?php echo $data->correos[0]['correo']; ?></span>
                    </a>
                </div>
                <div class="col-md-1 col-lg-2">
                    <?php echo $data->getRedSocial('facebook'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid menu-1 border py-2 sticky-top">
        <div class="row pt-2">
            <div class="col-lg-3 py-2 py-lg-0 text-center">
                <img src="<?php echo IMG;?>logo.png" alt="<?php echo $data->negocio;?>" width="230" height="72">
            </div>
            <div class="col-lg-9 navbar navbar-expand p-0 m-0 d-none d-lg-flex">
                <div class="collapse navbar-collapse align-self-center p-0 m-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto  w-100 justify-content-center">
                        <?php for($i=0; $i<count($data->paginas) ; $i++) : ?> 
                            <li class="nav-item px-2 mx-1 <?php echo $data->getPaginaActiva($data->paginas[$i]['archivo']); ?>">
                                <a class="nav-link t-color1" href="<?php echo $data->paginas[$i]['archivo']; ?>"><?php echo $data->paginas[$i]['title']; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->