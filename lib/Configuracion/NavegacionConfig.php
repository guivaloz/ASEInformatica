<?php
/**
 * ASE Informática - Navegacion Config
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package MovimientoLibre
 */

namespace Configuracion;

/**
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo  = 'ASE Informática';
    protected $logotipo; // 'imagenes/logotipo.png'
    protected $opciones      = array(
        'Servicios' => array(
            'Reparación de equipo'       => '#',
            'Sistemas de punto de venta' => '#',
            'Facturación electrónica'    => '#',
            'Redes'                      => '#',
            'Telefonía'                  => '#',
            'VPNs'                       => '#'),
        'Productos' => array(
            'Antivirus'                      => '#',
            'Cámaras de vigilancia'          => '#',
            'Computadoras'                   => '#',
            'Control de acceso y asistencia' => '#',
            'Software'                       => '#'),
        'Contacto'  => 'contacto/contacto.html');
    static public $iconos    = array(
        'Servicios' => 'fa fa-rocket',
            'Reparación de equipo'       => 'fa fa-cogs',
            'Sistemas de punto de venta' => 'fa fa-cogs',
            'Facturación electrónica'    => 'fa fa-cogs',
            'Redes'                      => 'fa fa-cogs',
            'Telefonía'                  => 'fa fa-cogs',
            'VPNs'                       => 'fa fa-cogs',
        'Productos' => 'fa fa-shopping-cart',
            'Antivirus'                      => 'fa fa-puzzle-piece',
            'Cámaras de vigilancia'          => 'fa fa-puzzle-piece',
            'Computadoras'                   => 'fa fa-puzzle-piece',
            'Control de acceso y asistencia' => 'fa fa-puzzle-piece',
            'Software'                       => 'fa fa-puzzle-piece',
        'Contacto'  => 'fa fa-phone');
    protected $buscador_html = <<<FINAL
          <form method="get" id="" action="http://www.aseinformatica.com.mx/buscador-resultados.html">
            <input type="hidden" value="" name="cx">
            <input type="hidden" value="FORID:11" name="cof">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Buscar..." value="" name="s" id="s">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
FINAL;
    protected $buscador_js = "";

} // Clase NavegacionConfig

?>
