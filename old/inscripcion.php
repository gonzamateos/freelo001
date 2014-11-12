<?php
/* Cuenta de correo que recibe los datos del formulario */
$myemail  = "conalprose@cwpanama.net";

/* Recopilamos datos del form y los ponemos en sus variables */
$nombre1 = $_POST['element_8_1'];
$nombre2 = $_POST['element_8_2'];
$fechaNacimiento_dia = $_POST['element_1_1'];
$fechaNacimiento_mes = $_POST['element_1_2'];
$fechaNacimiento_ano = $_POST['element_1_3'];
$cedula = $_POST['element_2'];
$email = $_POST['element_9'];
$estadoCivil = $_POST['element_20'];
$celular = $_POST['element_14'];
$telefono = $_POST['element_4'];
$fax = $_POST['element_5'];
$tipoSangre = $_POST['element_3'];

$dirempresa = $_POST['element_15'];
$empresa = $_POST['element_6'];
$cargo = $_POST['element_7'];
$numeroLicencia = $_POST['element_10'];
$pj = $_POST['element_11'];
$ramosAutorizados = $_POST['element_12'];
$compaTrabaja = $_POST['element_13'];

$asociado1 = $_POST['element_18'];
$asociado2 = $_POST['element_19'];


/* Preparamos el mensaje del email */
$message = "
-----------------
Datos Personales:
-----------------

Nombre: $nombre1 / $nombre2
Fecha de Nacimiento: $fechaNacimiento_dia / $fechaNacimiento_mes / $fechaNacimiento_ano
Cedula: $cedula
Email: $email
Estado Civil: $estadoCivil
Celular: $celular
Telefono: $telefono
Fax: $fax
Tipo de Sangre: $tipoSangre


--------------------
Información Laboral:
--------------------

Dirección Física: $dirempresa
Empresa: $empresa
Cargo: $cargo
Numero de Licencia: $numeroLicencia
PJ No: $pj
Ramos Autorizados: $ramosAutorizados
Compañias de Seguros con que Trabaja: $compaTrabaja

----------------------------
Miembros que lo recomiendan:
----------------------------

Asociado 1:$asociado1
Asociado 2:$asociado2

Fin del mensaje
";

$subject = "Conalprose - Inscripción Online";
$headers = 'From: Usuario Web <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $myemail;
"From: $email_from .\n";
"Reply-To: $email_from .\n";
$from = "conalprose@cwpanama.net";

/* Send the message using mail() function */
mail($myemail, $subject, $message, $headers);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
//exit();
?>