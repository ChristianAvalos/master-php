<?php

class categoria{
    private $id;
    private $nombre;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }

    public function getAll(){
        $categorias=$this->db->query("SELECT * FROM categorias ORDER BY id DESC");
        return $categorias;
    }

    public function save(){
        $sql = "INSERT INTO categorias VALUES (null,'{$this->getNombre()}') ";

        $save = $this->db->query($sql);
        
        $result=false;

        if ($save){
            $result=true;    
        }
        return $result;
    }

    public function getOne(){
        $categoria=$this->db->query("SELECT * FROM categorias WHERE id={$this->getId()}");
        return $categoria->fetch_object();
    }

}


?>