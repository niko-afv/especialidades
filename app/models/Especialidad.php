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
class Especialidad extends Eloquent{
    protected $table = 'ESPECIALIDADES';
    
    public function categoria()
    {
        return $this->belongsTo("Categoria");
    }
}
