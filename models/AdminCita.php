<?php

namespace Model;


class AdminCita extends ActiveRecord
{
    // Nombre de la tabla en la base de datos asociada a esta clase
    protected static $tabla = 'citasServicios';
    
    // Columnas de la tabla en la base de datos
    protected static $columnasDB = ['id', 'hora', 'cliente', 'email', 'telefono', 'servicio', 'precio'];

    // Propiedades de la clase que representan las columnas de la tabla
    public $id;
    public $hora;
    public $cliente;
    public $email;
    public $telefono;
    public $servicio;
    public $precio;

    // Constructor de la clase que inicializa las propiedades con valores proporcionados
    // por un array asociativo ($args), que se espera contenga valores de columnas de la tabla
    public function __construct($args = [])
    {
        // Asigna el valor de 'id' del array $args a la propiedad $id, si existe; de lo contrario, asigna null
        $this->id = $args['id'] ?? null;

        // Asigna el valor de 'hora' del array $args a la propiedad $hora, si existe; de lo contrario, asigna una cadena vacía
        $this->hora = $args['hora'] ?? '';

        // Repite el proceso para las demás propiedades de la clase
        $this->cliente = $args['cliente'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->servicio = $args['servicio'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }
}



