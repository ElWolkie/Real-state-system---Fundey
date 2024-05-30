<?php
class Persona
{
    private $cedula;
    private $nombre;
    private $apellido;
    private $sexo;
    private $telefono;
    private $direccion;

    public function setCedula($cedula)//setters
    {
        $this->cedula = $cedula;
    }

    public function setNombre($nombre)//setters
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)//setters
    {
        $this->apellido = $apellido;
    }

    public function setSexo($sexo)//setters
    {
        $this->sexo = $sexo;
    }

    public function setTelefono($telefono)//setters
    {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion)//setters
    {
        $this->direccion = $direccion;
    }
/////////////////////////////////////////////////////
		public function getCedula()//getters
	{
		return $this->cedula;
	}

	public function getNombre()//getters
	{
		return $this->nombre;
	}

	public function getApellido()//getters
	{
		return $this->apellido;
	}

    public function getSexo()//getters
	{
		return $this->sexo;
	}

	public function getTelefono()//getters
	{
		return $this->telefono;
	}

	public function getDireccion()//getters
	{
		return $this->direccion;
	}

    public function RegistrarPersona(){
        include("../views/conexion.php");//se llama al archivo para la conexion

        $sql = "INSERT INTO persona VALUES (?, ?, ?, ?, ?, ?)";//sentencia sql para registrar 
        $stmt = $conn->prepare($sql);//preparar la sentencia sql 
        $stmt->bind_param("ssssss", $this->cedula, $this->nombre, $this->apellido, $this->sexo, $this->telefono, $this->direccion);
        $stmt->execute();//ejecuta la sentencia sql
        return $stmt;//retornar el resultado de la sentencia sql
    }
}
?>
