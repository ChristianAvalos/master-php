<?php

class NotaController{
public function listar(){
    //Modelo
    require_once 'models/nota.php';

    //Logica delControlador
    $nota = new Nota();

    $notas = $nota->conseguirTodos('Notas');
    //Vista
    require_once 'views/nota/listar.php';
    
}

public function crear(){
    //Modelo
    require_once 'models/nota.php';
    
    $nota = new Nota();
    $nota->setUsuarioId(1);
    $nota->setTitulo('Nota 5');
    $nota->setDescripcion('Prueba de descripcion 5');
    $nota->guardar();
    header("Location:index.php?controller=Nota&action=listar");
}

public function borrar(){
    
}



}