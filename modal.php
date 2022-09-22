<?php 
include("conexion.php");
$idUser = $_REQUEST['id'];
$query = "SELECT * FROM peliculas WHERE id_pelicula = $idUser;";
$resultado = $conexion->query($query);
$data = $resultado->fetch_assoc();
 ?>

 <!DOCTYPE html>
 
 <html>
 
 <head>
 	<title>Datos de Peliculas</title>
	 <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
 </head>
 <body>
 <?php include "template/header.php"; ?>
 <br> <br> <br> <br> <br> <br> <br> <br>
 <section id="modal">
 <!-- <div class="container"> -->
         <h1><?php echo $data['nombre'];?></h1>
		 
 		 <img src="data:image/jpg;base64, <?php echo base64_encode($data['imagen']); ?>" >

		 <p ><?php echo $data['duracion']; ?></p>
		 
		 <p ><?php echo $data['genero']; ?></p>

         <p ><?php echo $data['participantes']; ?></p>
		 
		 <a><?php echo $data ['año']; ?></a>
		 <!-- </div> -->
		 </section>
		 
 </body>
 <?php include "template/footer.php"; ?>
 </html>