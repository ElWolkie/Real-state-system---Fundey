<?php
include '../model/clase_persona.php';

if (isset($_POST['enviar'])) {
    $persona = new Persona();
    $persona->setCedula($_POST['cedula']);
    $persona->setNombre($_POST['nombre']);
    $persona->setApellido($_POST['apellido']);
	$persona->setSexo($_POST['sexo']);
    $persona->setTelefono($_POST['telefono']);
    $persona->setDireccion($_POST['direccion']);
    $datos = $persona->RegistrarPersona($persona->getCedula(), $persona->getNombre(), $persona->getApellido(), $persona->getSexo(), $persona->getTelefono(), $persona->getDireccion());
}

header('Content-Type: application/json'); // Establece el tipo de contenido de la respuesta como JSON

if(empty($datos)) {
    // Si el método retorna un arreglo vacío, devuelve un error
    echo json_encode(['error' => 'No se pudo registrar los datos']);
} else {
    // Si el arreglo NO retornó vacío, devuelve un éxito
    echo json_encode(['success' => 'Persona registrada con éxito']);
}
?>

