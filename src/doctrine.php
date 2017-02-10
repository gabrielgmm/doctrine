<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
//classe principal do Doctrine
//tudo passa por ela

$paths = [
    __DIR__.'/Entity'
    
];
$isDevMode = true;

$dbParams = [
  'driver' => 'pdo_mysql',
   'user' =>  'root',
    'password' => '',
    'dbname' => 'doctrine'
    
];

//configurar via annotation ( tem outros metodos
$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

function getEntityManager(){
    global $entityManager;
    return $entityManager;
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

