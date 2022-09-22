<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <title>Catalogo</title>
<?php include "template/header.php"; ?>
<br><br><br>
<body>
    <h1 class="titulo">Productos</h1>
    <div class="container">
        <?php 
        include("conexion.php");
        $query = "SELECT * FROM productos";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
            <div class="card">
            <a href="modal.php?id=<?php echo $row['id_producto']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" width="380"
            height="300"></a>
                <h4> <?php echo $row ['nombre']; ?> </h4>
                
                <a>s/.<?php echo $row ['precio']; ?></a>
            </div>

        <?php
        }
        ?>

    </div>
</body>
<?php include "template/footer.php"; ?>
</html>

