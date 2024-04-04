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
            <h1>Conoce tus autores favoritos</h1><br>
            </div>
						<table id="autores">
							<tr>
								<th>Apellido</th>
								<th>Nombre</th>
								<th>Teléfono</th>
								<th>Dirección</th>
								<th>Ciudad</th>
								<th>Estado</th>
								<th>País</th>
								<th>Código Postal</th>
							</tr>
							<?php
							  require_once "app/logica/autores_bd.php";
							?>
						<?php
						$objautor =  new Autor();
						$autores = $objautor->mostrarAutores();

						foreach ($autores as $row) {
							echo "<tr>";
							echo "<td>".$row["apellido"]."</td>";
							echo "<td>".$row["nombre"]."</td>";
							echo "<td>".$row["telefono"]."</td>";
							echo "<td>".$row["direccion"]."</td>";
							echo "<td>".$row["ciudad"]."</td>";
							echo "<td>".$row["estado"]."</td>";
							echo "<td>".$row["pais"]."</td>";
							echo "<td>".$row["cod_postal"]."</td>";
							echo "</tr>";
						}	
						?>
						</table>
				</div>
			</div>

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