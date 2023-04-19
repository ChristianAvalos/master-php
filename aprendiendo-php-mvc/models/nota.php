<?php 
require_once 'modelobase.php';
class nota extends ModeloBase{
    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the value of usuario_id
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * Set the value of usuario_id
     */
    public function setUsuarioId($usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

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
        $this->descripcion = $descripcion;

        return $this;
    }

    public function guardar(){
        $sql = "INSERT INTO Notas values(null,'$this->usuario_id','$this->titulo','$this->descripcion');";
        
        $guardado= $this->db->query($sql);

        return $guardado;
    }
}

?>