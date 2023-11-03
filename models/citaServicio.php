<?php

namespace Model;

class CitaServicio extends ActiveRecord {
    protected static $tabla= 'citasServicios'; // Cambié la coma por un punto y coma
    protected static $columnasDB = ['id', 'citaId', 'servicioId'];

    public $id;
    public $citaId;
    public $servicioId;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->citaId = $args['citaId'] ?? '';
        $this->servicioId = $args['servicioId'] ?? '';
    }
}
