<?php
session_start();

if (isset($_SESSION['nombre'])) {
    header("location: ingreso.php");
} 
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar seccion</title>
    <link rel="stylesheet" href="./css/Barralogin.css" />
    <link rel="stylesheet" href="./css/login.css" />
   
  </head>
  <body>
    <main1>
      <div class="big-wrapper light">
        <img src="./img/logo.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="./img/logo.png" alt="Logo" />
              <h3>MascotasEd</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="./publicaciones/Index.html">Publicaciones</a></li>
                <li><a href="./perfil/Perfil.html">Contacto</a></li>
                <li><a href="#">Correo</a></li>
                <li><a href="Login.php" class="btn">Inicia sesion</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
          <br>
          <br>
        </header>
       


        <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

          
            <form action="php/Login.php" method="POST"  autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>PeritosEd</h4>
              </div>

            
              <div class="heading">
                <h2>Bienvenido</h2>
                <h6>No tienes cuenta aun?</h6>
                <a href="#" class="toggle">Registrate</a>
              </div>

              

              <div class="actual-form" >
                <div class="input-wrap">
                  <input
                    type="email"
                    name="Correo"
                    minlength="4"
                    class="input-field"
                    autocomplete="on"
                    required
                  />
                  <label>Correo</label>
                </div>

                <div class="input-wrap">
                  <input

                  name="Contraseña"
                    type="password"
                   
                    minlength="3"
                    class="input-field"
                    autocomplete="on"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Inciar Sesion" class="sign-btn" />

              </div>
            </form>

            <form action="php/Insertar.php" method="POST"  autocomplete="off" class="sign-up-form">

              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>PeritosEd</h4>
              </div>

              <div class="heading">
                <h2>Registrate</h2>
                <h6>Ya estas registriado?</h6>
                <a href="#" class="toggle">Iniciar sesion</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="Nombre"
                    minlength="4"
                    class="input-field"
                    autocomplete="on"
                    required
                  />
                  <label>Nombre</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="Correo"
                    class="input-field"
                    autocomplete="on"
                    required
                  />
                  <label>Correo</label>
                </div>
               
                <div class="input-wrap">
                  
                  <input
                  name="Contraseña"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Registrate" class="sign-btn" />

                
              </div>
              
          </div>
          </form>


          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/0.jpg" class="image img-1 show" alt="" />
              <img src="./img/1.jpg" class="image img-2" alt="" />
              <img src="./img/perro_0.jpg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Adopta le salvara la vida</h2>
                  <h2>Las mascotas son lo mejor</h2>
                  <h2>Intentalo</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
         
    </main>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btnn">
              
            </button>
          </div>
        </div>
      </div>
    </main1>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./js/app.js"></script>
    <script src="./Login/Barra.js"></script> 
  </body>
</html>
