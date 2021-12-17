<?php
$remitente = $_POST['email'];
$destinatario = 'zarakigrey@gmail.com'; // en esta lÃnea va el mail del destinatario.
$asunto = 'Asunto de ejemplo'; // acÃ¡ se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "TelÃ©fono: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Correo: " . $_POST["correo"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
    
	//las lÃneas de arriba definen el contenido del mail. Las palabras que estÃ¡n dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acÃ¡.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'index.html'; //se debe crear un html que confirma el envÃo
}
?>
