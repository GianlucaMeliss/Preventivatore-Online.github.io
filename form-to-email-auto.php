<html>
  <head>
	<title> Preventivatore Online</title>
	<link rel="icon" type="image/x-icon" href="icona.png"><!--deve essere messa come.ico-->
	<link rel="stylesheet" href="stili2.css">
  </head>
  
  <body>
  	  <div class="titolo">
	<h3>il tuo modulo e' stato inviato <br> puoi chiudere questa scheda <br></h3>
  	</div>
  </body>
</html>
<?php
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
$mail->Body = 'Corpo della mail';

//per prendere gli indirizzi ip dei visitatori e salvarli in un file

$filename = 'users.txt';
$text = "\n".'Ip:'.$ip.'		Data:'.$data;

$bytes = file_put_contents($filename, $text, FILE_APPEND);

if (false === $bytes) {
    exit;
}
 ?>