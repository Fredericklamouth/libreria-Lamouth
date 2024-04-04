<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
    <link rel="stylesheet" href="styles/main.css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
    
    <div class="content">

        <h1 class="logo">Contactanos</h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contactanos</h3>
                <form method="POST" id="Formulario">
                    <p>
                        <label>Nombre completo</label>
                        <input type="text"  id="nombre" name="nombre" placeholder="Nombre y apellido" required>
                    </p>
                    <p>
                        <label>Correo electronico</label>
                        <input type="email" id="correo" name="correo" placeholder="Correo" required>
                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="comentario" rows="3" placeholder="Comentario" required ></textarea>
                    </p>
                    <p class="block">
                        <button type="submit" name="enviar">
                            Enviar
                        </button>
                    </p>
                    <?php
        include("app/logica/formulario_bd.php");
    ?>
                </form>
            </div>
            <div class="contact-info">
                <h4>Mas informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Santo Domingo</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> fredericklamouth@gmail.com.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Lamouth Library</p>
            </div>
        </div>

    </div>
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