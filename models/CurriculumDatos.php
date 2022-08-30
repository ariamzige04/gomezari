<?php

namespace Model;

class CurriculumDatos extends ActiveRecord {
    
    protected static $tabla = 'curriculumDatos';
    protected static $columnasDB = ['id', 'perfil', 'empresa', 'empresa_info', 'proyecto_info', 'html', 'css', 'js', 'php', 'gulp', 'sass', 'adobe_xd', 'mysql', 'administrarId'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->perfil = $args['perfil'] ?? '';
        $this->empresa = $args['empresa'] ?? '';
        $this->empresa_info = $args['empresa_info'] ?? '';
        $this->proyecto_info = $args['proyecto_info'] ?? '';
        $this->html = $args['html'] ?? '';
        $this->css = $args['css'] ?? '';
        $this->js = $args['js'] ?? '';
        $this->php = $args['php'] ?? '';
        $this->gulp = $args['gulp'] ?? '';
        $this->sass = $args['sass'] ?? '';
        $this->adobe_xd = $args['adobe_xd'] ?? '';
        $this->mysql = $args['mysql'] ?? '';
        $this->administrarId = $args['administrarId'] ?? '';


    }
}