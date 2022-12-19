<html>
  <head>
	<title> Preventivatore Online</title>
	<link rel="icon" type="image/x-icon" href="icona.png"><!--deve essere messa come.ico-->
	<link rel="stylesheet" href="stili.css">
  </head>
  
  <body>
  	  <div class="titolo">
	<h3>il tuo modulo e' stato inviato <br> puoi chiudere questa scheda <br></h3>
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
  $Email = $_POST['Email'];
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
        Richieste aggiuntive: $Eventuali_richieste\n\n\n\n".               

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