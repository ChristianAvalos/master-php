<?php
require_once 'config/database.php';
class ModeloBase{
    public $db;

    public function __construct()
    {
        $this->db = database::conectar();
    }

    public function conseguirTodos($tabla) {
        $query =$this->db->query("SELECT * FROM $tabla ORDER BY id$tabla ASC");
        return $query;
        
        
    }

}

?>