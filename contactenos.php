 <?
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$tema = $_POST['tema'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", con el tema " . $tema . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Los comentarios: " . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'alanis11espinal@gmail.com';
$asunto = 'comentarios';

mail($para, $asunto, utf8_decode($mensaje), $header);
?>

<script> 
alert('correo enviado'); 
 window.history.go(-1)
</script> 


 