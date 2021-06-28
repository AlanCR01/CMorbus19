<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="home.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
         <!--script para seta dos estados-->
         <script src="setas_estados.js"> </script>
         <!--script para o menu barra lateral-->
        <script src="abre_menu.js"></script>
    </head>
    <?php
            require_once("esta_conectado.php");// para verificar se tem usuário logado pois o site so opera com usuário logados

             require_once("pega_dado_menu_home.php");  //irá pegar os dados do user para mostrar no menu         
           
        ?>
    <body>

        
        <section id="container_principal">

               <?php require_once("menu.php"); // ira pegar o menu lateral que terá informações do user e opções?>

            <section id="secao_principal">
               <?php require_once("painel.php") //ira pegar o painel local onde tem os dados do covid ?>
    
              <?php require_once("secao_perguntas.php"); //irá pegar secao de perguntas que os users poderão fazer para os médicos?>

            </section><!--Fim da secao principal-->
           
            <div class="faq" style="position:fixed;bottom:5px;right:30px">
                 <img src="images/faq.png" alt="faq" class="faq_img" width="80px">
            </div>
        </section><!--Fim do container principal-->
  
    </body>
</html>