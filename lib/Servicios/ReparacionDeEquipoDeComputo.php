<?php
/**
 * Movimiento Libre - ReparacionDeEquiposDeComputo
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

namespace Servicios;

/**
 * Clase ReparacionDeEquiposDeComputo
 */
class ReparacionDeEquiposDeComputo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Reparación de equipo de cómputo';
     // $this->autor                      = '';
        $this->fecha                      = '2016-08-03T08:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'reparacion-de-equipo-de-computo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Confiabilidad y calidad con técnicos certificados..';
        $this->claves                     = 'Reparacion, Equipos, Computadoras';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Servicios/ReparacionDeEquiposDeComputo.md';
        // Para el Organizador
        $this->categorias                 = array('Reparación de equipo');
    } // constructor

} // Clase ReparacionDeEquiposDeComputo

?>
