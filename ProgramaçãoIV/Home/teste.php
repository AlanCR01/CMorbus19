<?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con_norte = mysqli_query($conexao,"call casos_regiao('Confirmado','Norte')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con_norte);
                                                 $sql_confirmado_norte = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con_norte);
                                                 mysqli_close($conexao);
                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_rec_norte = mysqli_query($conexao,"call casos_regiao('Recuperado','Norte')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_rec_norte);
                                                     $sql_recuperado_norte = $sql_con_row['total'];
                                                     mysqli_free_result($sql_rec_norte);
                                                     mysqli_close($conexao);                                         
                                        ?>

<?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con_nordeste = mysqli_query($conexao,"call casos_regiao('Confirmado','Nordeste')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con_nordeste);
                                                 $sql_confirmado = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con_nordeste);
                                                 mysqli_close($conexao);
                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_rec = mysqli_query($conexao,"call casos_regiao('Recuperado','Nordeste')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_rec);
                                                     $sql_recuperado = $sql_con_row['total'];
                                                     mysqli_free_result($sql_rec);
                                                     mysqli_close($conexao);                                         
                                        ?>
                                        <?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con = mysqli_query($conexao,"call casos_regiao('Confirmado','Centro-Oeste')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con);
                                                 $sql_confirmado = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con);
                                                 mysqli_close($conexao);
                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_con = mysqli_query($conexao,"call casos_regiao('Recuperado','Centro-Oeste')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_con);
                                                     $sql_recuperado = $sql_con_row['total'];
                                                     mysqli_free_result($sql_con);
                                                     mysqli_close($conexao);                                         
                                        ?>
                                        <?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con = mysqli_query($conexao,"call casos_regiao('Confirmado','Sudeste')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con);
                                                 $sql_confirmado_sudeste = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con);
                                                 mysqli_close($conexao);
                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_con = mysqli_query($conexao,"call casos_regiao('Recuperado','Sudeste')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_con);
                                                     $sql_recuperado_sudeste = $sql_con_row['total'];
                                                     mysqli_free_result($sql_con);
                                                     mysqli_close($conexao);                                         
                                        ?>
                                         <?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con_sul = mysqli_query($conexao,"call casos_regiao('Confirmado','Sul')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con_sul);
                                                 $sql_confirmado_sul = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con_sul);
                                                 mysqli_close($conexao);

                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_rec_sul = mysqli_query($conexao,"call casos_regiao('Recuperado','Sul')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_rec_sul);
                                                     $sql_recuperado_sul = $sql_con_row['total'];
                                                     mysqli_free_result($sql_rec_sul);
                                                     mysqli_close($conexao);   
                                                     include ("../Cadastro_Login/conecta.php");                                        
                                        ?>