<?php

namespace App;

class Propiedad extends ActiveRecord
{
    protected static $tabla = 'propiedades';
    protected static $columnasDB = [
        'id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'
    ];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;



    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? null;
        $this->titulo = $arg['titulo'] ?? '';
        $this->precio = $arg['precio'] ?? '';
        $this->imagen = $arg['imagen'] ?? '';
        $this->descripcion = $arg['descripcion'] ?? '';
        $this->habitaciones = $arg['habitaciones'] ?? '';
        $this->wc = $arg['wc'] ?? '';
        $this->estacionamiento = $arg['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $arg['vendedores_id'] ?? '';
    }

    public function validar()
    {

        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if (!$this->precio) {
            self::$errores[] = "El precio es obligatorio";
        }

        if (strlen($this->descripcion) < 50) {
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if (!$this->habitaciones) {
            self::$errores[] = "El numero de habitaciones es obligatorio";
        }

        if (!$this->wc) {
            self::$errores[] = "El numero de baños es obligatorio";
        }

        if (!$this->estacionamiento) {
            self::$errores[] = "El numero de lugares de estacionamiento es obligatorio";
        }

        if (!$this->vendedores_id) {
            self::$errores[] = "Elige un Vendedor";
        }

        if (!$this->imagen) {
            self::$errores[] = "La imagen es de la propiedad es obligatoria";
        }
        return self::$errores;
    }
}
