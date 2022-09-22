<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/logo.jgp">
    
    <title>Inicio</title>
</head>


<body>
<?php include "template/header.php"; ?>
    <br><br><br><br><br><br><br>
    <section id="computadoras">
    <h2>Peliculas</h2>
        <div class="container">
                 <?php 
        include("conexion.php");
        $query = "SELECT * FROM peliculas";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
            <a href="modal.php?id=<?php echo $row['id_pelicula']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" width="400"
            height="225"></a>

        <?php
        }
        ?>
            
        </div>
        </div>
        </section>
        <br><br><br><br><br>
        <section id="masvendido">
        <h2>franquicias</h2>
            <div class="container">     
                <?php 
        include("conexion.php");
        $query = "SELECT * FROM franquicias";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
            <a href="modal.php?id=<?php echo $row['id_franquicia']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" width="400"
            height="225"></a>

        <?php
        }
        ?>
            
            </div>
        </section> 
        
    <br><br><br><br><br>
    
</body>
</html>