<?php
// Incluir el archivo de la clase Database
require 'Database.php';

// Crear una nueva instancia de la clase Database
$database = new Database();
$conexion = $database->conectar();

// Obtener el ID de la imagen desde la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Sanitizar la entrada

// Preparar y ejecutar la consulta
$sql = "SELECT nombre, imagen FROM imagenes WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Si hay imagen, mostrarla
if ($result && $result['imagen']) {
    header("Content-type: image/jpeg"); // Cambia esto según el tipo de imagen
    echo $result['imagen'];
} else {
    echo "Imagen no encontrada.";
}
?>
