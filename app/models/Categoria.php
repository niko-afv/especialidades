<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author nfredes
 */
class Categoria extends Eloquent{
    protected $table = 'CATEGORIAS';
    protected $primaryKey = "ID";
    public $timestamps = FALSE;
    
    public function especialidades()
    {
        return $this->hasMany("Especialidad", "CATEGORIA");
    }   
}
