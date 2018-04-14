<?php
	require 'PHPMailer\PHPMailerAutoload.php';
	$mail = new PHPMailer;

	$to = "otit1978@hotmail.com";
	//recogeremos los datos del formulario
	//$nombre = $_POST['name'];
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$message = nl2br($_POST['message']);


	if($nombre == "" || $email == "" || $message == ""):
		echo '<div class="alert alert-danger">Faltan campos por rellenar</div>';
	else:
		$mail->From = $email;
		$mail->addAddress($to);

		$mail->isHtml(true);
		$mail->Body = '<strong>'.$nombre.', Contact: '.$email.'</strong> le ha enviado el siguiente mensaje: <br><p>'.$message.'</p>';

		$mail->CharSet = 'UTF-8';
		$mail->send();
	endif;
?>