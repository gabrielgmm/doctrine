<?php

namespace App\Entity;

/**
 * @Entity
 * @Table(name="categories")
 * 
 */
class Category
// entidade apenas representa o que precisamos
//annotation é nos comentarios(crachas)
//todo campo precisa ter comentario
//caso mude o banco, nao vai alterar
{
    /**
     *@Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     *
     * @Column(type="string",lenght=100)
     * 
     */
    private $name;
    
    /**
     * 
     * @return mixed
     */
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }


    function setName($name) {
        $this->name = $name;
    }


    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

