<?php
require 'Database.php';

// esto crea una nueva instancia de la clase Database
$database = new Database();
$conexion = $database->conectar();

// obtiene el ID de la imagen desde la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; 

// prepara y ejecuta consulta
$sql = "SELECT nombre, imagen FROM imagenes WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Si hay imagen la muestra con un echo
if ($result && $result['imagen']) {
    header("Content-type: image/jpeg"); 
    echo $result['imagen'];
} else {
    echo "Imagen no encontrada.";
}
?>
