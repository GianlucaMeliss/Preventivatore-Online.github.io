<html>
<!--
PHP mail send


-->

<!--

//variabili
  $Luogo_di_ubicazione = $_POST['Luogo_di_ubicazione'];
  $Tipo_Abitazione = $_POST['Tipo_Abitazione'];
  $Valore = $_POST['Valore'];
  $Tipo = $_POST['Tipo'];
  $Garanzia = $_POST['Garanzia'];
  $Email = $_POST['Email'];
  $Telefono = $_POST['Telefono'];
  $Eventuali_richieste = $_POST['Eventuali_richieste'];

 $ip = getenv(REMOTE_ADDR);
 $data = date("j F, Y, G:i:s T", time());

// Crea un'istanza della classe PHPMailer
$mail = new PHPMailer;

// Imposta il protocollo SMTP
$mail->isSMTP();

// Imposta le opzioni SMTP
$mail->Host = 'infodati.bm.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'infodati.bm';
$mail->Password = 'attivita@cral';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Imposta i dettagli dell'email
$mail->setFrom('infodati.bm.gmail.com', 'infodati.bm');
$mail->addAddress('infodati.bm.gmail.com', 'Nuova Richiesta');
$mail->Subject = 'NUOVA RICHIESTA';
$mail->Body = "
Luogo di ubicazione: $Luogo_di_ubicazione\n
  Tipo di abitazione: $Tipo_Abitazione \n
  Valore: $Valore $Tipo\n  
  Garanzia: $Garanzia\n
  ---------------
  E-mail: $Email\n
  Telefono: $Telefono\n
  Richieste aggiuntive: $Eventuali_richieste\n\n\n\n";

$mail->send()
-->
  <head>
	<title> Preventivatore Online</title>
	<link rel="icon" type="image/x-icon" href="icona.png"><!--deve essere messa come.ico-->
	<link rel="stylesheet" href="stili2.css">
  </head>
  
  <body>
    <div class="centro">
      <div class="contornoVerde">
      <div class="titolo">
	      <h3>il tuo modulo e' stato inviato <br> puoi chiudere questa scheda <br></h3>
  	  </div>
      </div>
    </div>
  	  
  </body>
</html>
<?php
//variabili
$Luogo_di_ubicazione = $_POST['Luogo_di_ubicazione'];
$Tipo_Abitazione = $_POST['Tipo_Abitazione'];
$Valore = $_POST['Valore'];
$Tipo = $_POST['Tipo'];
$Garanzia = $_POST['Garanzia'];
$Email = $_POST['E_mail'];
$Telefono = $_POST['Telefono'];
$Eventuali_richieste = $_POST['Eventuali_richieste'];

$ip = getenv(REMOTE_ADDR);
$data = date("j F, Y, G:i:s T", time());
//mail 
  $email_from = 'rsyqlumu@preventivatoretestbm.x10.mx';
$email_subject = "NUOVA RICHIESTA";
$email_body = "
    Luogo di ubicazione: $Luogo_di_ubicazione\n
      Tipo di abitazione: $Tipo_Abitazione \n
      Valore: $Valore $Tipo\n  
      Garanzia: $Garanzia\n
      ---------------
      E-mail: $Email\n
      Telefono: $Telefono\n
      Richieste aggiuntive: $Eventuali_richieste\n\n\n\n";               

//invio        
$to = "infodati.bm@gmail.com";
$headers = "From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);


//per prendere gli indirizzi ip dei visitatori e salvarli in un file
$filename = 'users.txt';
$text = "\n".'Ip:'.$ip.'		Data:'.$data;

$bytes = file_put_contents($filename, $text, FILE_APPEND);

if (false === $bytes) {
    exit;
}
 ?>

