<?php

class producto{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
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

    /**
     * Get the value of categoria_id
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * Set the value of categoria_id
     */
    public function setCategoriaId($categoria_id): self
    {
        $this->categoria_id = $this->db->real_escape_string($categoria_id);

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $this->db->real_escape_string($precio);
        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     */
    public function setStock($stock): self
    {
        $this->stock = $this->db->real_escape_string($stock);

        return $this;
    }

    /**
     * Get the value of oferta
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set the value of oferta
     */
    public function setOferta($oferta): self
    {
        $this->oferta = $this->db->real_escape_string($oferta);

        return $this;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of imagen
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     */
    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getAll(){
        $sql="SELECT * FROM productos ORDER BY id DESC";
        $productos=$this->db->query($sql);
        return $productos;
    }
    public function getAllCategory(){
        $sql="SELECT p.*,c.nombre as 'catnombre' FROM productos p
                join categorias c on c.id=p.categoria_id
                where p.categoria_id = {$this->getCategoriaId()}
                ORDER BY id DESC";
        $productos=$this->db->query($sql);

        return $productos;
    }
    public function getOne(){
        $sql="SELECT * FROM productos where id= {$this->getId()}";

        $producto=$this->db->query($sql);
        return $producto->fetch_object();
    }

    public function getRandom($limit){
        $sql="SELECT * FROM productos ORDER BY rand() LIMIT $limit";
        $productos = $this->db->query($sql);
        return $productos;
    }


    public function save(){
        $sql = "INSERT INTO productos VALUES (null,'{$this->getCategoriaId()}','{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},null,CURDATE(),'{$this->getImagen()}')";
        $save = $this->db->query($sql);

        $result=false;

        if ($save){
            $result=true;    
        }
        return $result;
    }
    public function edit(){
        $sql = "UPDATE productos SET nombre='{$this->getNombre()}',descripcion='{$this->getDescripcion()}',precio={$this->getPrecio()},stock={$this->getStock()},categoria_id='{$this->getCategoriaId()}'";
        if ($this->imagen != null){
            $sql .= ",imagen='{$this->getImagen()}'";
        }
        $sql .= "WHERE id={$this->id}";
        
        $save = $this->db->query($sql);

        $result=false;

        if ($save){
            $result=true;    
        }
        return $result;
    }

    public function delete(){
        $sql="DELETE FROM productos where id={$this->id}";
        $delete = $this->db->query($sql);
        $result=false;

        if ($delete){
            $result=true;    
        }
        return $result;
    }

}


?>