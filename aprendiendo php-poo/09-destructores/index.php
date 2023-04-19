<?php
class usaurio {
    public $nombre;
    public $email;
    public function __construct()
    {
        $this->nombre='Christian ';
        $this->email='Christian@gmail.com ';
        echo "Instanacia del objeto creado ".'<br/>';
    }
    public function __toString()
    {
        return "Hola".$this->nombre.', estas registrado con'.$this->email;
    }


    public function __destruct()
    {
        echo '<br/>'."destruyendo el objeto creado ".'<br/>';
    }
}

$usuario=new usaurio();
echo $usuario->email;
echo $usuario;


?>