  <!DOCTYPE html>
<html>
<title>Keizandev</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    
    <!-- javascripts -->
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.min.js"></script>

    <!-- nice scroll -->
    <script src="css/jquery.scrollTo.min.js"></script>
    <script src="css/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="css/scripts.js"></script><!--Menu-->
    <script src="css/angular1.3.14.min.js"></script>

    <!--Ultimo estilo-->
    <link href="css/estilo.css" rel="stylesheet" />
    <link href="css/chk.css" rel="stylesheet" />
    <link href="css/wsp.css" rel="stylesheet" />
     <link href="css/boxicons.min.css" rel="stylesheet" />
     <link href="css/boxicons.css" rel="stylesheet" />

    <!--DatePicker-->
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <link href="css/jquery-ui.css" rel="stylesheet">


    <style type="text/css">
      .modalDialog {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}
.modalDialog > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }


.topnav {
  overflow: hidden;
  float: right;
}

.topnav a {
  float: right;
  display: block;
  
  text-align: center;
  
  text-decoration: none;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}



 .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
   a.icon {
    float: right;
    display: block;
    font-size: 22px !important;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
   .icon {
    position: absolute;
    right: 0;
    top: 0;
    font-size: 22px !important;
  }
  .topnav {
    float: none;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;

  }
}

    </style>
<body>

	<a href="https://api.whatsapp.com/send?phone=56932507495&text=Hola!%20Deseo%20mas%20informacion%20del%20servicio%EF%B8%8F" class="btn-wsp" target="_blank">
    <i class='bx bxl-whatsapp'></i>
  </a>
	
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button" onclick="myFunction()"><b>KZ</b> Desarrollo</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="topnav " id="myTopnav" >
      <a  class="w3-bar-item w3-button" style="display: none;"></a>
      <a href="#projects" class="w3-bar-item w3-button" onclick="myFunction()" >Proyectos</a>
      <a href="#about" class="w3-bar-item w3-button" onclick="myFunction()" >Acerca de</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="myFunction()" >Contacto</a>
      
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </div>
    <a href="javascript:void(0);" class="icon w3-padding" onclick="myFunction()" style="color: black;">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/home.jpg" alt="Informatica" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>KZ</b></span> <span class="w3-hide-small w3-text-light-grey">Desallorro</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Proyectos</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Acerca de</h3>
    <p>Keizandev Desarrollo es una pequeña asociacion que se encarga de crear y en casos de administrar sistemas o software. Hoy en dias contamos con experiencias personales de nuestros
socios como en Paginas Web, escritorio y Android/IOS. Keizandev comenzo hace poco su emprendimiento pero nuestros desarrolladores cuentan con experiencia con mas de un año y con muy buenos resultados,
si eres una pyme que quiere su propia pagina web o al igual que alguien que necesites de nuestros servicios no dudes en enviarnos un mensaje y nosotros nos pondremos en contacto contigo, podremos conversar y charlas que es lo que esperas en tu sistema futuro y asi poder crecer de una manera inigualable
gracias a la Tecnologia, Internet y Keizandev.
    </p>
  </div>

  <div class="form-group" style="text-align: center;">
    <div class="col-sm-6">
      <img src="img/usuario.png" alt="Jose" style="    width: 150px;
    height: 170px;">
      <h3>Jose Vergara</h3>
      <p class="w3-opacity">Analista Programador</p>
      <p>Jose es nuestro analista programador estudiando actualmente para terminar la ingenieria en informatica, su buena disposicion y su rapido aprendizaje nos han podido aportar mucho en keizandev,
actualmente se maneja principalmente en sistemas web y de escritorio manejandose en algunos lenguajes como Html,Php,Laravel Basico, Boostrap,AngularJs,Javascript y por el lado de escritorio
C# y visual basic. Tambien se reconoce al tener un fuerte conocimiento en base de datos como Sql Server y MySql.</p>
      <button class="w3-button w3-black w3-section" data-toggle="modal" data-target="#modal_Jose" style="width: 100%;">
        <i class="fa fa-paper-plane"></i> Contacto Personal
      </button>




    </div>
    <div class="col-sm-6">
      <img src="img/usuario.png" alt="Carlos" style="    width: 150px;
    height: 170px;">
      <h3>Carlos Aranguiz</h3>
      <p class="w3-opacity">Ingeniero en Informatica</p>
      <p>Carlos es ingeniero en informatica, acostumbrado a trabajar bajo presion, es una persona bastante resolutiva, 3 años de experiencia desarrollando aplicaciones web, sus habilidades nos han sido de gran ayuda al momento de entregar soluciones a nuestros clientes posee conocimientos en lenguajes tales como ReactJs, NodeJs, php,javascript,Mysql, MongoDb, tambien maneja sistemas como linux y windows.</p><br>
      <button class="w3-button w3-black w3-section" data-toggle="modal" data-target="#modal_Carlos" style="width: 100%;">
        <i class="fa fa-paper-plane"></i> Contacto Personal
      </button>
    </div>
    <!--<div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>-->
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contacto</h3>
    <p>Contactenos y hablemos de su proximo proyecto.</p>
    <form method="POST" >
      <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="nombre">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Asunto" required name="asunto">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comentario" required name="comentario">
      <button class="w3-button w3-black w3-section" id="enviarmail" name="enviarmail">
        <i class="fa fa-paper-plane"></i> Enviar Mensaje
      </button>
      <?php
		include("enviarcorreo.php");
		?>

    </form>

  
  </div>


  
<!-- Image of location/map -->
<div class="w3-container">
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">De donde somos</h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52823.79322056625!2d-70.77371856489363!3d-34.15946252755563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96634367bdef13d3%3A0xd973fc8366ad54f7!2sRancagua%2C%20O&#39;Higgins!5e0!3m2!1ses!2scl!4v1611178193540!5m2!1ses!2scl" frameborder="0" style="border:0;width: 100%; height: 600px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- End page content -->
</div>

    <!-- Modal Jose Vergara Informaciono-->
    <div class="modal fade" id="modal_Jose" >

      <div class="modal-dialog">   
          <div class="modal-content" id="">
            <div class="modal-header">
                
                <h4 class="modal-title">Jose Vergara</h4>
            </div>
            <div class="modal-body">
              <div class="panel-body">
                  <form class="form-horizontal " method="POST">
                    <div class="form-group">


                      <i class="icon_mail"></i>
                        <b>jjosemiguel.jv@gmail.com</b>
                       

                        
                    </div>
                    <div class="form-group">
                          <i class="icon_mail_alt"></i>
                        <b>jjosemiguel.jv2@gmail.com</b>
                    </div>
                    <div class="form-group">
                        <i class="icon_mobile"></i>
                        <b>+56932507495</b>
                    </div>
                  </form>
              </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="w3-button w3-black w3-section" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
    <!--Modal Jose Vergara FIN-->


      <!-- Modal Carlos Aranguiz Informaciono-->
    <div class="modal fade" id="modal_Carlos" >

      <div class="modal-dialog">   
          <div class="modal-content" id="">
            <div class="modal-header">
                
                <h4 class="modal-title">Carlos Aranguiz</h4>
            </div>
            <div class="modal-body">
              <div class="panel-body">
                  <form class="form-horizontal " method="POST">
                    <div class="form-group">


                      <i class="icon_mail"></i>
                        <b>carlos.aranguiz2004@gmail.com</b>
                       

                        
                    </div>
                    <div class="form-group">
                          <i class="icon_mail_alt"></i>
                        <b>carlos.aranguiz2004@gmail.com</b>
                    </div>
                    <div class="form-group">
                        <i class="icon_mobile"></i>
                        <b>+56953754939</b>
                    </div>
                  </form>
              </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="w3-button w3-black w3-section" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      </div>
    </div>
    <!--Modal Carlos Aranguiz FIN-->






        <!--Ejemplo de otro modal-->

    <div id="openModalJose" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <div class="modal-header">
                
                <h4 class="modal-title">Jose Vergara</h4>
            </div>

    <div class="modal-body">
              <div class="panel-body">
                  <form class="form-horizontal " method="POST">
                    <div class="form-group">
                        <div class="col-sm-12">
                          <i class="icon_plus_alt2"></i>
                        </div>
                    </div>
                  </form>
              </div>
              
            </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Creado por <a href="https://www.Keizandev.cl" title="Keizandev" target="_blank" class="w3-hover-text-green">Keizandev.cl</a></p>
</footer>

</body>
  </html>
   
