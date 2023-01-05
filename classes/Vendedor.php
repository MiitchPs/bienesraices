<?php

namespace App;

class Vendedor extends ActiveRecord
{
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];
    public $id;
    public $nombre;
    public $apellido;
    public $telefono;


    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? null;
        $this->nombre = $arg['nombre'] ?? '';
        $this->apellido = $arg['apellido'] ?? '';
        $this->telefono = $arg['telefono'] ?? '';
    }

    public function validar()
    {

        if (!$this->nombre) {
            self::$errores[] = "El nombre es obligatorio";
        }
        if (!$this->apellido) {
            self::$errores[] = "El apellido es obligatorio";
        }
        if (!$this->telefono) {
            self::$errores[] = "El telefono es obligatorio";
        }

        if (!preg_match('/[0-9]{10}/', $this->telefono)) {
            self::$errores[] = "Formato No valido";
        }


        return self::$errores;
    }
}
