<?php
include 'core/core.php';
$data = new Datos();

$data->paginaActual = basename($_SERVER['PHP_SELF']); 

$data->url          = '';
$data->dominio      = 'douglasgzconstruye';
$data->negocio      = 'Douglas G.Z. Construye';

// Numeros de telefonos
$data->telefonos[0] = ['numero' => '(505) 8888-8888', 'nombre' => ''];

// Direcciones de correos
$data->correos[0]   = ['correo' => 'micuentadecorreo@gmail.com', 'nombre' => ''];

// Redes sociales [url, nombre de imagen de logo, ancho ej: 80.px]
$data->social['facebook'] = [
    'url' => 'https://www.facebook.com',
    'logo' => 'facebook.png',
    'ancho' => '30px',
    'alto' => '30px'
];


// Paginas del sitio web (en orden)
$data->paginas[0] = ['archivo' => 'index.php', 'title' => 'Inicio'];
$data->paginas[1] = ['archivo' => 'servicios.php', 'title' => 'Servicios'];
$data->paginas[2] = ['archivo' => 'galeria.php', 'title' => 'Galeria'];
$data->paginas[3] = ['archivo' => 'testimonios.php', 'title' => 'Testimonios'];
$data->paginas[4] = ['archivo' => 'contacto.php', 'title' => 'Contacto'];

// Texto para los sliders
$data->sliderText = [
    'Construyendo tus ideas',
    'Tu mejor opcion',
    'Detalles con dedicación'
];

// Textos para los Call to action
$data->cta = [
    'Contactanos'
];




