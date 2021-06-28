<header id="container_menu">


<div class="container_logo">
    <div class="logo">Comvida19</div>
    <div class="botao_menu" ><img src="images/botao_menu.png" width="20px" id="btn_menu" ></div>
</div>

<?php  require_once("pega_dado_menu_home.php");  //irá pegar os dados do user para mostrar no menu ?>   

<div class="container_perfil_lista">
    <?php 
       if(mysqli_num_rows($sql_perfil)>0){
           ?>
             <div class='container_perfil'>
                 <div class='foto_perfil'>
                
                       <?php  if($gen_pac == 'M'){ ?>
                             <img src="../Perfil/avatar_masc.png" alt="" width="140px">
                         <?php }else {?>
                         <img src="../Perfil/avatar_fem.png" alt="" width="140px">
                            <?php }?>
           
                 </div>
                 <div class='informacao_perfil'>
                     <div class='perfil_nome'>
                         <span class='informacao'><?= $_SESSION['login']?> </span>
                     </div>
                     <div class='perfil_informacao'>
                         <span class='informacao'>Idade: <?= $idade ?></span>
                         <span class='informacao'>Peso: <?= $peso ?></span>
                     </div>
                     <div class='perfil_informacao'>
                         <span class='informacao'>Genero: <?= $gen_pac ?></span>
                         <span class='informacao'>Altura: <?=  $altura ?></span>
                     </div>

                 </div>
             </div>
        
             <?php } ?>
          
     <div class="menu">
         <ul>
             <li>
                 <a href="../Perfil/perfil.php">
                     <i class='bx bxs-user' ></i>
                     <span class="links_nome">Acessar meu perfil</span>
                 </a>
                 <span class="tooltip">Meu perfil</span>
             </li>
             <li>
                 <a href="formulario.php">
                 <i class='bx bx-edit' ></i>
                     <span class="links_nome">cadastro de endereço</span>
                 </a>
                 <span class="tooltip">Cadastro de informações endereço</span>
             </li>
             <li>
                 <a href="#">
                 <i class='bx bx-message-edit'></i>
                     <span class="links_nome">Cadastro sintomas</span>
                 </a>
                 <span class="tooltip">Acessar cadastro sintomas</span>
             </li>
             <li>
                 <a href="#">
                     <i class='bx bx-message-alt-detail' ></i>
                     <span class="links_nome">Perguntas Médico</span>
                 </a>
                 <span class="tooltip">Acessar minhas perguntas</span>
             </li>
         </ul>
     </div>

 </div>


 <div class="container_sair">
     <div class="sair">Aperte para sair</div>
     
     <img src="images/log-out.png" alt="" width="25px">
 </div>

</header>
