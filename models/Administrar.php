<?php


namespace Model;

use Model\ActiveRecord;

class Administrar extends ActiveRecord {
    protected static $tabla = 'administrar';
    protected static $columnasDB = ['id', 'curriculum', 'url', 'propietarioId'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->curriculum = $args['curriculum'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->propietarioId = $args['propietarioId'] ?? '';
    }

    public function validarCurriculum() {
        if(!$this->curriculum) {
            self::$alertas['error'][] = 'El Nombre del Curriculum es Obligatorio';
        }
        return self::$alertas;
    }
}