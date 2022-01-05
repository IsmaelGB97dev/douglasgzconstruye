<?php 
const CSS = 'src/css/';
const JS = 'src/js/';
const IMG = 'src/img/';
const SLIDER = IMG . 'slider/';
const SLIDERMIN = SLIDER . 'min/';
const SECTIONS = 'php/sections/';

class Datos {
    public $url;
    public $dominio;
    public $paginas     = array();
    public $paginaActual;
    public $telefonos   = array();
    public $correos     = array();
    public $social      = array();
    public $cta         = array();
    public $sliderText  = array();
    public $servicio   = array();
    
    /**
     * Obtener el nombre de la pagina actual
     * @return void
     */
    public function getNombrePagina() {
        $file = $this->paginaActual;
        foreach ($this->paginas as $v) {
            if($v['archivo'] == $file) {
                return $v['title'];
            }
        }
    }
    
    /**
     * Retorna el nombre de clase 'active' si se esta en la pagina actual
     * @param  mixed $nombreArchivo Nombre del archivo a comparar
     * @return string
     */
    public function getPaginaActiva($nombreArchivo) {
        if($this->paginaActual == $nombreArchivo) {
            return "active";
        }
    }
    
    /**
     * Obtener la imagen de la red social
     * @param  string $nombre nombre de la red social
     * @return echo
     */
    public function getRedSocial($nombre) {
        echo '<a href="' . $this->social[$nombre]['url']. '" target="_blank" rel="noopener"><img src="' . IMG . 'marcas/' . $this->social[$nombre]['logo'] . '" width="' . $this->social[$nombre]['ancho'] .  '" height="' .  $this->social[$nombre]['alto'] . '" class="img-fluid" alt="' . $this->negocio . '"></a>';
    }


    function __construct()
    {
    }
}