<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RBS - Contacto</title>
    <meta name="description" content="Core HTML Project">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- External CSS -->
    <link rel="stylesheet" href="./vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/select2/select2.min.css">
    <link rel="stylesheet" href="./vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/lightcase/lightcase.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://file.myfontastic.com/7vRKgqrN3iFEnLHuqYhYuL/icons.css" rel="stylesheet">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <span class="lnr lnr-moon"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/RBS/">Volver a Inicio</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>		<div class="jumbotron d-flex align-items-center" style="background-image: url(img/hero-2.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Contactanos!</h1>
    <p>
      Ayudanos compartiendo detalles de lo que necesitas desarrollar.
    </p>
  </div>
</div>		<!-- Contact Form Section -->
<section id="gtco-contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title">Ponte en Contacto</h2>
                <p class="section-sub-title">Presenta la informacion de lo que actualmente tienes <br> y de como te gustarìa que fuera diferente.</p>
                
            </div>
		
	
		<div class="row">
  <!-- Contact Form Holder -->
  <div class="col-md-8 offset-md-2 contact-form-holder mt-4">
    <form method="post" action="" name="contact-us">
      <div class="row">
        <div class="col-md-6 form-input">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
        </div>
        <div class="col-md-6 form-input">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="col-md-12 form-input">
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Tema">
        </div>
        <div class="col-md-12 form-textarea">
          <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tu Mensaje ..."></textarea>
        </div>
        <div class="col-md-12 form-btn text-center">
          <button class="btn btn-block btn-secondary btn-red" type="submit" name="submit">Enviar mensaje</button>
        </div>
      </div>
    </form>
    <div id="form-message-warning"></div>
    <div id="form-message-success">
      <?php if(isset($message)) { echo $message; } ?>
    </div>
  </div>
</div>


<script>
  function sendEmail() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    var body = "Nombre: " + name + "\n" +
               "Email: " + email + "\n" +
               "Tema: " + subject + "\n" +
               "Mensaje: " + message;

    // Replace the email address and subject with your own values
    var recipient = "juliositgespomares@gmail.com";
    var emailSubject = "Mensaje de contacto desde el sitio web";

    // Send the email using the mail() method
    mail(recipient, emailSubject, body);
  }
</script>

		
		
		

        </div>
    </div>
</section>
<!-- End of Contact Form Section -->		<footer class="mastfoot mb-3 bg-white py-4 border-top">
    <div class="inner container">
         <div class="row">
         	<div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
         		<p class="mb-0">&copy; 2023 RBS. Todos los derechos reservados. Diseñado por <a href="/RBS/" target="_blank">RBS</a>.</p>
         	</div>
           
            <div class="col-md-6">
            	<nav class="nav nav-mastfoot justify-content-md-end justify-content-center">
	                <a class="nav-link" href="#">
	                	<i class="icon-facebook"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="icon-twitter"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="icon-instagram"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="icon-linkedin"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="icon-youtube"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="icon-pinterest"></i>
	                </a>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>	</div>
	
</div>
	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="./vendor/bootstrap/popper.min.js"></script>
	<script src="./vendor/bootstrap/bootstrap.min.js"></script>
	<script src="./vendor/select2/select2.min.js "></script>
	<script src="./vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="./vendor/isotope/isotope.min.js"></script>
	<script src="./vendor/lightcase/lightcase.js"></script>
	<script src="./vendor/waypoints/waypoint.min.js"></script>
	<script src="./vendor/countTo/jquery.countTo.js"></script>

	<!-- Main JS -->
	<script src="./js/app.min.js "></script>

	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>