<?php


	
	if (isset($_POST['enviarmail'])) {
	if (!empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['comentario']) ) {


		$nombre = $_POST['nombre'];
		$Email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$comentario = $_POST['comentario'];

		$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
		$mensaje .= "Su e-mail es: " . $Email . " \r\n";
		$mensaje .= "Mensaje: " . $_POST['comentario'] . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());

		$para = "jjosemiguel.jv@gmail.com,carlos.aranguiz2004@gmail.com";


		$header = "From: contacto@keizandev.cl"."\r\n";
		$header .= "Reply-To: contacto@keizandev.cl"."\r\n";
		$header .= "X-Mailer: PHP/".phpversion();
		$mail = @mail($para, $asunto, $mensaje,$header);

		if ($mail) {
			echo "<script>window.onload=function() {location.replace('http://keizandev.cl/');alert('Mensaje enviado');};</script>";
		}
	}
}


?>