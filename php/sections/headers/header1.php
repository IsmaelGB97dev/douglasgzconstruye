<header>
    <div class="container-fluid  bg-white header-1">
        <div class="row py-2 justify-content-center d-none d-md-flex">
            <div class="col-lg-5 text-center text-lg-start border-bottom py-2 top-info">
                <span>
                    <a href="mailto:<?php echo $data->correos[0]['correo']; ?>">
                        <i class="fas fa-envelope pe-2 text-secondary"></i>
                        <?php echo $data->correos[0]['correo']; ?>
                    </a>
                </span>
            </div>
            <div class="col-lg-5 pe-0 text-center text-lg-end border-bottom py-2 top-info">
                <span class="px-4 border-left">
                    <a href="contact.php" class="t-color1">Get a Quote</a>
                </span>
                <span class="px-4 border-left">
                    <a href="tel:<?php echo $data->telefonos[0]['numero']; ?>">
                        <i class="fas fa-phone-alt pe-2 text-secondary"></i>
                        <?php echo $data->telefonos[0]['numero']; ?>
                    </a>
                </span>
            </div>
        </div>
        <div class="row mb-3 py-2 d-block d-md-none bg-color1 top-info">
            <div class="col-12 text-center">
                <span class="px-4">
                    <a href="tel:<?php echo $data->telefonos[0]['numero']; ?>" class="text-white">
                        <i class="fas fa-phone-alt pe-2 text-white"></i>
                        <?php echo $data->telefonos[0]['numero']; ?>
                    </a>
                </span>
            </div>
        </div>
        <div class="row p-0 m-0 py-2">
            <div class="col-md-4 text-center my-auto">
                <a href="#">
                    <img src="<?php echo IMG.'logo'; ?>.png" alt="logo" class="img-fluid" width="211" height="38">
                </a>
            </div>
            <div class="col-md-7">
                <?php include MENUS.'menu1.php'; ?>
            </div>
            <div class="col-md-0 col-lg-1"></div>
        </div>
    </div>
</header>
