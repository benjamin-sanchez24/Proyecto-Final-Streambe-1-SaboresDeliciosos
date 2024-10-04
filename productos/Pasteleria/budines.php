<?php 

require __DIR__ . '/../../config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, sabor, tamaño, cantidad, imagen FROM prodpasteleria WHERE activo=2");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores Deliciosos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
    
    <link rel="icon" href="images/logo.jfif" type="image/x-icon">
</head>
<body style="background-color: #D1ACC7;">
    <div class="home">
        <img src="images/logo.jfif" width="150px" height="150px">
    </div>  
    <div class="navBar">
        <ul class="lista">
            <li><a href="/index.html" class="redi">Inicio</a></li>
            <li>
                <ul>
                    <button type="button" class="redi" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="border: 0; background-color: rgb(98, 37, 85); padding-right: 2.8vw;">Productos</button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Productos</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <h3>Pasteleria</h3>
                            <a href="muffins.php" class="link"><h5 class="tipoDeProducto">Muffins</h5></a>
                            <a href="budines.php" class="link"><h5 class="tipoDeProducto">Budines</h5></a>
                            <a href="alfajores.php" class="link"><h5 class="tipoDeProducto">Alfajores</h5></a>
                            <h5 class="tipoDeProducto">Tortas</h5>
                            <h5 class="tipoDeProducto">Tartas</h5>
                            <h5 class="tipoDeProducto">Brownies</h5>

                            <h3>Panaderia</h3>
                            <h5 class="tipoDeProducto">Panes</h5>
                            <h5 class="tipoDeProducto">Pre pizzas</h5>
                            <h5 class="tipoDeProducto">Boxes salados</h5>
                            <h5 class="tipoDeProducto">Roscas o trenzas</h5>
                            <h5 class="tipoDeProducto">Galletas o alfajores</h5>
                            <h5 class="tipoDeProducto">Cremonas</h5>
                        </ul>
            <li><a href="/contacto.html" class="redi">Contactanos</a></li>
            </li>
        </ul>
    </div>

<div class="contenedor">
    <div class="categorias">

        <div class="superior"><strong>Productos</strong>
        <form>
            <input class="busqueda" type="search" placeholder="Buscar"/>
            <button type="submit" class="enviar">🔎</button>
        </form>
</div>

<div class="contenedorProductos">
    <div class="listaSugerencias">
        <h5 style="color: #4A1A3F;">PRODUCTOS DESTACADOS</h5>
        <div class="sugerencia">
            <img src="images/Chocotorta.jpg" width="90" height="50" style="border-radius: 5px;">
            <p class="nombreProducto">Chocotorta</p>
        </div>
        
        <div class="sugerencia">
            <img src="images/lemon-pie.jpeg" width="90" height="50" style="border-radius: 5px;">
            <p class="nombreProducto">Lemon Pie</p>
        </div>
        <div class="sugerencia">
            <img src="images/budines.jpg" width="90" height="50" style="border-radius: 5px;">
            <p class="nombreProducto">Budines</p>
        </div>
    </div>
</div>
</div>

<div class="ejemplares">
<?php foreach($resultado as $columns) { 
            $id = $columns['id'];
            $imagenBinaria = $columns['imagen']; // Esto es el BLOB
            $imagenBase64 = base64_encode($imagenBinaria);
            $tipoImagen = 'image/jpeg'; // Cambia esto si es necesario
        ?>
    <div class="ejemplar">
            <div class="ejemplarImagen">
                <img style="width: 150px; height: 190px; margin-top: 10px; border-radius: 7%" src="data:<?php echo $tipoImagen; ?>;base64,<?php echo $imagenBase64; ?>" alt="<?php echo htmlspecialchars($columns['nombre']); ?>" />
            </div>
            <div class="ejemplarInfo">
                <h4><?php echo htmlspecialchars($columns['nombre']); ?></h4>

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
                    Ver información
                </button>

                <div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $id; ?>" aria-hidden="true" style="z-index: 100000;">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $id; ?>"><?php echo htmlspecialchars($columns['nombre']); ?></h1>
                            </div>
                            <div class="modal-body" style="display: flex; align-items: center;">
                                <img src="data:<?php echo $tipoImagen; ?>;base64,<?php echo $imagenBase64; ?>" width="40%" class="ponerImagen" alt="<?php echo htmlspecialchars($columns['nombre']); ?>">
                                <ul>
                                <?php echo "<li>Sabor: " . $columns['sabor'] . "</li>";
                                  echo "<li>Tamaño: " . $columns['tamaño'] . "</li>";
                                 echo "<li>Cantidad: " . $columns['cantidad']. "</li>";?> 
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <?php } ?>
</div>



</div>  
       
<footer style="background-color: #FEFEFF;" class="pie">    
    <div class="ft">
        <img src="images/logofooter.png" width="300px" style="margin: 3%;">
        <h4>Panadería y Pastelería</h4>
        <p>Desayunos, eventos, tortas clasicas y decoradas</p>
    </div>
    <div class="ft">
        <a href="https://maps.app.goo.gl/rmQu3AjEBf19bj5Z8" target="_blank"><h4>Tienda</h4></a>
        <a href="https://linktr.ee/saboresdeliciososs" target="_blank"><h4>Contacto</h4></a>
    </div>
    <div class="ft">
        <h6>C. Chile 2195 <br> Benavidez, Buenos Aires.</h6>
        <h6>Lunes a Sabados de 9:30 a 19:00</h6>
        <b>Mensajes o WhatsApps al +54 9 11 2348-8392</b>
    </div>
    <div class="ft">
        <b>Seguime en Instagram:</b><br>
        <a href="https://www.instagram.com/saboresdeliciososs/" target="_blank"><img src="images/logoig.png" width="25wh">
        <b>@saboresdeliciososs</b></a>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="pasteleria.js"></script>
</body>
</html>
