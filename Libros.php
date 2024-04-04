<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Libreria Lamouth</title>
  <link rel="stylesheet" href="styles/autores.css" />
</head>

<body>
  <header>
    <div class="header-cover"></div>
    <img class="header-image" src="https://miro.medium.com/v2/resize:fit:2000/1*whJElO4Mw0CiiLDUGpYRog.jpeg" alt="Reading" />
    <nav>
      <div class="nav-blur"></div>
      <p class="logo-text">Lamouth Library</p>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="Autor.php">Autores</a></li>
        <li><a href="Libros.php">Catálogo</a></li>
        <li><a href="Contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <br>
  <main style="margin-top: 1rem; padding: 2rem">
  <br>
    <div class="contenedor-center">
        <div class="titulo">
            <h1>Catalogo de Libros</h1><br>
            </div>
						<table id="libro">
							<tr>
							<th>ID</th>
							<th>Título</th>
							<th>Tipo</th>
							<th>Publicador</th>
                            <th>Precio</th>
							<th>Avance</th>
							<th>Fecha</th>
							</tr>	
							<?php
							include ("app/logica/libros_bd.php");
							?>
						<?php
						$oblibro =  new Libro();
						$libros = $oblibro->mostrarLibros();

						foreach ($libros as $row) {
							echo "<tr>";
							echo "<td>".$row["id_titulo"]."</td>";
							echo "<td>".$row["titulo"]."</td>";
							echo "<td>".$row["tipo"]."</td>";
							echo "<td>".$row["nombre_pub"]."</td>";
							echo "<td>".$row["precio"]."</td>";
							echo "<td>".$row["notas"]."</td>";
							echo "<td>".$row["fecha_pub"]."</td>";
							echo "</tr>";
						}	
						?>
						</table>
				</div>
			</div>  
  </main>
  <footer>
    <div class="footer-cover"></div>
    <img class="footer-image" src="images/footer.jpg" alt="Reading" />
    <div class="header-text">
      <h1><br> Lamouth Library</h1><br>
      <p>Fredericklamouth@gmail.com<br> No se que ma poner</p><br>
    </div>
  </footer>
</body>

</html>