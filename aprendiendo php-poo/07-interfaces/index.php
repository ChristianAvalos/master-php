<?php
interface ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUsb();
}
class iMac implements ordenador{
    private $modelo;
    

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }
    public function encender()
    {
        
    }
    public function apagar()
    {
        
    }
    public function reiniciar()
    {
    
    }

    public function desfragmentar()
    {
        
    }
    public function detectarUsb()
    {
    
    }

}
$maquintos=new iMac;
$maquintos->setModelo('Mackbook 2019');
echo $maquintos->getModelo();




?>