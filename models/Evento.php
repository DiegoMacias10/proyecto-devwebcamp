<?php

namespace Model;

class Evento extends ActiveRecord {
    protected static $tabla = 'eventos';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'disponibles', 'categoria_id', 'dia_id', 'hora_id', 'ponente_id'];

    public $id;
    public $nombre;
    public $descripcion;
    public $disponibles;
    public $categoria_id;
    public $dia_id;
    public $hora_id;
    public $ponente_id;

    public function __construct($args=[]) {
        $this->id = $agrs['id'] ?? null;
        $this->nombre = $agrs['nombre'] ?? '';
        $this->descripcion = $agrs['descripcion'] ?? '';
        $this->disponibles = $agrs['disponibles'] ?? '';
        $this->categoria_id = $agrs['categoria_id'] ?? '';
        $this->dia_id = $agrs['dia_id'] ?? '';
        $this->hora_id = $agrs['hora_id'] ?? '';
        $this->ponente_id = $agrs['ponente_id'] ?? '';
    }

    // Mensajes de validación para la creación de un evento
    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'La descripción es Obligatoria';
        }
        if(!$this->categoria_id  || !filter_var($this->categoria_id, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Elige una Categoría';
        }
        if(!$this->dia_id  || !filter_var($this->dia_id, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Elige el Día del evento';
        }
        if(!$this->hora_id  || !filter_var($this->hora_id, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Elige la hora del evento';
        }
        if(!$this->disponibles  || !filter_var($this->disponibles, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Añade una cantidad de Lugares Disponibles';
        }
        if(!$this->ponente_id || !filter_var($this->ponente_id, FILTER_VALIDATE_INT) ) {
            self::$alertas['error'][] = 'Selecciona la persona encargada del evento';
        }

        return self::$alertas;
    }
}