<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}
	
	
	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure that the name field is not empty
	if(trim($_POST['tel']) == '') {
		$hasError = true;
	} else {
		$tel = trim($_POST['tel']);
	}
	
	
	$message = $_POST['message'];

	//If there is no error, send the email -
	if(!isset($hasError)) {
	
		
		$emailTo = 'conalprose@cwpanama.net'; //Put your own email address here
		$subject = 'Consulta Usuario WebSite Conalprose';
		$body = "Nombre: $name \n\nEmail: $email \n\nTelefono: $tel \n\nMensaje:\n $message" ;
		$headers = 'From: Conalprose <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- -------------------------------------------------------- -->
<!-- Conalprose -->
<!-- -------------------------------------------------------- -->

<head>
	<meta charset="UTF-8">
	<meta content='' name='keywords'/>
	
	
	<title>Conalprose</title>
	
	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" media="all" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="favicon.ico">


	
	
	
</head>

<body>
	
	<div id="menu">
		<ul class="ca-menu">
			<a href="index.html"><div class="parpado" id="logo">
				<img src="img/logomenu.png" border="0">
			</div></a>
            <li>
                <a href="quienes.html">
                    <span class="ca-icon"><img src="img/iconos/1.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Quienes Somos</h2>
                        
                    </div>
                </a>
            </li>
            <li>
                <a href="asociados.php">
                    <span class="ca-icon"><img src="img/iconos/2.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Asociados</h2>
                        
                    </div>
                </a>
            </li>
            <li>
                <a href="corredor.php">
                    <span class="ca-icon"><img src="img/iconos/3.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Corredor de Seguros</h2>
                        
                    </div>
                </a>
            </li>
            <li>
                <a href="actualidad.php">
                    <span class="ca-icon"><img src="img/iconos/4.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Actualidad</h2>
                        
                    </div>
                </a>
            </li>
            <li style="background: #0e3359; color:#2676AC;">
                <a href="contacto.php">
                    <span class="ca-icon"><img src="img/iconos/5.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Contacto</h2>
                       
                    </div>
                </a>
            </li>
        </ul>

        <div id="footinfo">
        	&copy; Copyright 2013 - Centro de Agencias<br>Desarrollado por TOMORROW DIGITAL PROJECT
        </div>	
		
	</div>	 

	<div id="contenedor">

			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=200588802839586898358.0004dbd41a1b1263978ae&amp;ie=UTF8&amp;t=m&amp;ll=8.978171,-79.512262&amp;spn=0.029673,0.036564&amp;z=14&amp;output=embed"></iframe>

			<div id="cuadro-contacto">
				<div id="contact-wrapper" style="position:absolute; width:320px; height:300px; padding-left:20px; top:240px; left:460px; padding-right:20px; padding-top: 30px; padding-bottom: 10px; margin-top: -245px; margin-right:-160px; font-size:20px;">
							<?php if(isset($hasError)) { //If errors are found ?>
								<p class="error1" id="error1"><span>Por favor verifique que tenga todos los campos requeridos con la informaci&oacute;n correcta.</span></p><br />
							<?php } ?>

							<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
								<p id="error2">Su mensaje ha sido enviado con &eacute;xito <strong><?php echo $name;?></strong>, pronto estaremos en contacto con usted.</p><br />
							<?php } ?>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform" style="margin-top:40px">
							<div>
								<label for="name">Nombre:</label><br />
								<input type="text" size="60" name="contactname" id="uno" value="" class="required" /><span></span>
							</div>

							<div>
								<label for="email">E-mail:</label><br />
								<input type="text" size="60" name="email" id="uno" value="" class="required email" /><span style="color:#906149;"></span>
							</div>
							
							<div>
								<label for="articulo">Telefono:</label><br />
								<input type="text" size="60" name="tel" id="uno" value="" class="required" /><span style="color:#906149;"></span>
							</div>

							<div>
								<label for="message">Mensaje:</label><br />
								<textarea rows="5" cols="50" name="message" id="dos" class="required" ></textarea><span style="color:#906149;"></span>
							</div>
						
							<span style="font-size: 8px;"></span><br /><br />
							<input type="submit" class="enviar" name="submit" value="Enviar"/>
						</form>
				</div>
				
				<div id="texto-contacto" style="position:absolute; top:70px; font-size:17px; margin-left:30px; width:376px; line-height:20px;">
					<img src="img/titleco.png">
					<div id="linea"></div><br>
					<p>Si desea obtener mas informaci&oacute;n  sobre las inscripciones y membresias, llene el formulario de contacto y nos comunicar&eacute;mos con usted lo mas pronto posible.</p><br /><br />
					<div>
						<p>E-mail:conalprose@cwpanama.net</p>
						<p>Tel&eacute;fono: 264-6014 / fax:264-6073</p>
						<p>Punta Paitilla, CC Plaza Paitilla</p>
						<p>Oficina #54, Republica de Panam&aacute;.</p>
					</div>	
				</div>
			
		</div>	

	</div>	

	<!-- JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

	<script>
		jQuery( document ).ready( function($) {
			$( ".parpado" ).mouseover( function() {
				$( this ).stop( true, true ).animate({
					opacity: 0.6
				}, 200, "swing", function() {
					$( this ).animate({
						opacity: 1
					}, 400 );
				});
			});


		});
	</script>

</body>

</html>

<!-- ZZzzZZZzzz! -->
	

	
	
