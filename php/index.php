<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Miguel Angel</title>
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" integrity="sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    	
</head>
<body>
	<header id="main-header">
        <nav id ="navHeader">
            <a href="login.php"><div id="menu2">Login</div></a>
            <a href="register.php"><div id="menu2">Registro</div></a>
            <a href="#aqui"><div id="menuMin">Conocimientos</div></a>
            <a href="#cuboContenedor"><div id="menuMin">Projectos</div></a>
            <a href="#about-me" ><div id="menuMin">Sobre mi</div></a>
        </nav>
	</header> 	

	<div id ="content">
		<h2 id="nombre">Miguel Ángel</h2>
		<h2 id="apellido">Sedeño Martínez</h2>
	</div>	

	<div class="slider" id="container">
        <div class="slide">
          <img src="../img/slider1.jpg" alt="Slide 1" id="slider">
        </div>
        <div class="slide">
          <img src="../img/slider2.png" alt="Slide 2" id="slider">
        </div>
        <div class="slide">
          <img src="../img/slider3.webp" alt="Slide 3" id="slider">
        </div>
      </div>

		<!-- Caja de conocimientos en programacion , los 3 lenguajes (html , javascript, y css)-->
        <div id ="aqui"></div>
	<div class="info-box" >
		<h2>Conocimientos en programacion</h2>
		  <div id="flex-p">  
			<p class="big"><i class="fa-brands fa-square-js"></i></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci incidunt, laudantium nostrum minus fuga aut dolore fugit cupiditate qui.</p>
			<p class="big"><i class="fa-brands fa-html5" id="conEspacio"></i>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		  <p class="big"><i class="fa-brands fa-css3-alt" id="conEspacio2"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci incidunt, laudantium nostrum minus fuga aut dolore fugit cupiditate qui..</p>
		  </div> 
	</div>
    <div id="cuboContenedor"></div>
         	<!--  Mi propio Js -->
           <button onclick="toggleMenu()" id="botonPop"><i class="fa-solid fa-bars"></i></button>
           <div id="menu" style="display: none;">
            <div class="triangulo"></div>
            <div id="popup">
                <b> ¡HOLA MUNDO!DISFRUTA DE LA WEB </b></div>
          </div>

          <!--<section class="section-table">
        <div class="section-table-content">   

            <article class="article-table">
                <div class="article-table__img">
                    <img src="../img/lenguaje-de-programacion-cuerpo-1024x586.jpg" alt="">
                </div>
                <div class="article-table__title">
                    <h2>Titulo 1</h2>
                </div>
                <div class="article-table__categories">
                    <a href="#">BUENO, BONITO Y BARATO</a>
                </div>
                <div class="article-table__resume">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                        massa.</p>
                </div>
                <div class="article-table__info">
                    <p>lorem ipsum</p>
                    <p class="separator">/</p>
                    <p>September 27, 2002</p>
                </div>
            </article>

            <article class="article-table">
                <div class="article-table__img">
                    <img src="../img/lenguaje-de-programacion-cuerpo-1024x586.jpg" alt="">
                </div>
                <div class="article-table__title">
                    <h2>Titulo 1</h2>
                </div>
                <div class="article-table__categories">
                    <a href="#">BUENO, BONITO Y BARATO</a>
                </div>
                <div class="article-table__resume">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                        massa.</p>
                </div>
                <div class="article-table__info">
                    <p>lorem ipsum</p>
                    <p class="separator">/</p>
                    <p>September 27, 2002</p>
                </div>
            </article>

            <article class="article-table">
                <div class="article-table__img">
                    <img src="../img/lenguaje-de-programacion-cuerpo-1024x586.jpg" alt="">
                </div>
                <div class="article-table__title">
                    <h2>Titulo 1</h2>
                </div>
                <div class="article-table__categories">
                    <a href="#">BUENO, BONITO Y BARATO</a>
                </div>
                <div class="article-table__resume">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                        massa.</p>
                </div>
                <div class="article-table__info">
                    <p>lorem ipsum</p>
                    <p class="separator">/</p>
                    <p>September 27, 2002</p>
                </div>
            </article>
        </div>
-->

                        <!-- PHP DINAMICO-->

<section class="section-table">
    <div class="section-table-content">
        <?php
        $file = fopen("../proyectos.csv", "r");
        while (($data = fgetcsv($file)) !== false) {
            $articles[] = $data;
        }
        fclose($file);
        for ($i = 0; $i < count($articles); $i++) {
            $article = $articles[$i];
            ?>
            <article class="article-table">
                <div class="article-table__img">
                    <img src="<?php echo $article[4]; ?>" alt="">
                </div>
                <div class="article-table__title">
                    <h2><?php echo $article[0]; ?></h2>
                </div>
                <div class="article-table__categories">
                    <a href="#"><?php echo $article[1]; ?></a>
                </div>
                <div class="article-table__resume">
                    <p><?php echo $article[2]; ?></p>
                </div>
                <div class="article-table__info">
                    <p><?php echo $article[3]; ?></p>
                </div>
            </article>
        <?php
        }
        ?>
    </div>
</section>



                            <!-- PHP DINAMICO-->


   <footer>
    <div class="container">
        <div class="div">
          <h2 id="about-me">About me</h2>
                        
                        <p class="paragrph">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                        </p>
      
                        <p class="paragrph">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                        </p>
                        <p class="paragrph">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt Duis aute irure dolor in reprehenderit. 
                        </p>
                        
                        <hr>
                        <address class="paragrph2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                          </address>      
      
        </div>
        
        <div class="div">
                <form class="form" id="contact_me">
                    <h2 id="about-me">Contact me </h2>

                    <label>Nombre</label>
                    <input type="text" name="Name" >
                    <div id="emailDiv">
                    <label>Direccion email </label>
                    <input type="email" name="Email Adress" >
                    </div>
                    <label>Mensaje</label>
                    <textarea name="Message" rows="10" cols="30" maxlength="400"></textarea>
                    <p><input type="submit" name="Contact Me" id="boton" >
                    </p>
                </form>
            
                <p class="paragrph1" id="xd">
                    <strong>Email: </strong> 
                    <a href="mailto:sedeno2002@gmail.com" style="text-decoration:none;color:#6A6E71">sedeno2002@gmail.com</a>
                </p>
        </div>
      
      </div>
    </footer>
    <script src="../js/index.js"></script>
</body>
</html>