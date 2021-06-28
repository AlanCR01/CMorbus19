
<?php require("info_regiao.php"); ?>


<article id="painel"><!--CONTERÁ ESTATISTICAS CASOS NOVOS RECUPERADOS GERAL  E POR REGIOES--> 
    <section id="estatistica"><!--ESTATISTICAS CASOS RECUPERADOS CONFIRMADOS  GERAL-->
                        <div class="cards">
                        <?php
                                $sql_sus = mysqli_query($conexao,"call casos_geral('Suspeito')");
                                $sql_con_row = mysqli_fetch_assoc($sql_sus);
                                    $sql_suspeito = $sql_con_row['total'];
                                     mysqli_free_result($sql_sus);
                                     mysqli_close($conexao);
                            ?>
                            <h2>Casos suspeitos</h2>
                            
                            <div style="align-self:center"><?= ($sql_suspeito); ?></div>
                        </div>
                        <div class="cards">
                            <?php
                             include ("../Cadastro_Login/conecta.php"); 
                                $sql_con = mysqli_query($conexao,"call casos_geral('Confirmado')");
                                $sql_con_row = mysqli_fetch_assoc($sql_con);
                                    $sql_confirmado = $sql_con_row['total'];
                                     mysqli_free_result($sql_con);
                                     mysqli_close($conexao);
                            ?>
                            
                            <h2>Casos confirmados</h2>
                            <div  style="align-self:center"><?= ($sql_confirmado); ?></div>
                        </div>  
                        <div class="cards">
                            
                            <h2>Casos recuperados</h2>
                            <?php
                                    include ("../Cadastro_Login/conecta.php");      
                                    $sql_rec =  mysqli_query($conexao,"call casos_geral('Recuperado')"); 
                                     $row = mysqli_fetch_assoc($sql_rec);                            
                                         $sql_recuperado = $row['total']; 
                                         mysqli_free_result($sql_rec);
                                         mysqli_close($conexao);
                            ?>
                            <div style="align-self:center"><?= ($sql_recuperado); ?></div>
                        </div>
                        <div class="cards">
                            <h2>Casos Ativos</h2>
                            <div  style="align-self:center"><?= (($sql_confirmado)-($sql_recuperado));?></div>
                        </div>
                    </section>
            
                    <section id="estatistica_regiao"><!--ESTATISTICAS POR REGIOES-->
                        <div class="header_estatistica_regiao">
                            <h2>Veja os casos por regiões</h2>
                        </div>
                        <section id="mapa_regiao">
                            <div class="mapa">
                                <img src="images/southamerica.png" alt="southamerica" class="img_mapa">
                            </div>
                            <div class="container_regioes">
                              
                                <div class="header_regioes">
                                    <div class="column1 column">Total de casos</div><div class="column2 column">Casos ativos</div><div class="column3 column">Casos recuperados</div>
                                </div>
                                <div class="regioes">
                                    <!--Brasil-->
                                    <div class="regiao">
                                        <div class="nome_regiao">
                                            Brasil
                                        </div>

                                        <div class="casos_regiao">
                                            <div class="column1 column"><?= $sql_confirmado?></div>
                                            <div class="column2 column"><?= $sql_confirmado - $sql_recuperado?></div>
                                            <div class="column3 column"><?= $sql_recuperado?></div>
                                        </div>
                                    </div>
                                    <!--Norte-->
                                    <div class="regiao">
                                        <div class="seta_regiao">
                                            <div class="seta_norte">
                                                <img src="images/seta_estado.png" alt="" width="20px" class="img_seta">
                                            </div>
                                            <div class="nome_regiao">
                                                Norte
                                            </div>
                                        </div>
                                       
                                        <div class="casos_regiao">
                                            <div class="column1 column"><?= ($array_regiao_dados["Norte"]["Confirmado"])?></div>
                                            <div class="column2 column"><?= ($array_regiao_dados["Norte"]["Confirmado"]) - ($array_regiao_dados["Norte"]["Recuperado"])?></div>
                                            <div class="column3 column"><?=($array_regiao_dados["Norte"]["Recuperado"])?></div>
                                        </div>

                                        <div class="estado_norte estados">
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Santa Catarina
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>

                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Paraná
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Rio Grande so Sul
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Nordeste-->
                                    <div class="regiao">
                                        <div class="seta_regiao">
                                            <div class="seta_nordeste">
                                                <img src="images/seta_estado.png" alt="" width="20px" class="img_seta">
                                            </div>
                                            <div class="nome_regiao">
                                                Nordeste
                                            </div>
                                        </div>
                                        
                                        <div class="casos_regiao">
                                            <div class="column1 column"><?= ($array_regiao_dados["Nordeste"]["Confirmado"])?></div>
                                            <div class="column2 column"><?= ($array_regiao_dados["Nordeste"]["Confirmado"]) - ($array_regiao_dados["Nordeste"]["Recuperado"])?></div>
                                            <div class="column3 column"><?=($array_regiao_dados["Nordeste"]["Recuperado"])?></div>
                                        </div>

                                        <div class="estado_nordeste estados">
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Santa Catarina
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>

                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Paraná
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Rio Grande so Sul
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Centro-Oeste-->
                                    <div class="regiao">
                                        <div class="seta_regiao">
                                            <div class="seta_centro">
                                                <img src="images/seta_estado.png" alt="" width="20px" class="img_seta">
                                            </div>
                                            <div class="nome_regiao">
                                                Centro-Oeste
                                            </div>
                                        </div>
                                        
                                        <div class="casos_regiao">
                                            <div class="column1 column"><?=  ($array_regiao_dados["Centro-Oeste"]["Confirmado"])?></div>
                                            <div class="column2 column"><?= ($array_regiao_dados["Centro-Oeste"]["Confirmado"]) - ($array_regiao_dados["Centro-Oeste"]["Recuperado"])?></div>
                                            <div class="column3 column"><?= ($array_regiao_dados["Centro-Oeste"]["Recuperado"])?></div>
                                        </div>

                                        <div class="estado_centro estados">
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Santa Catarina
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>

                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Paraná
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Rio Grande so Sul
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Sudeste-->
                                    <div class="regiao">
                                        <div class="seta_regiao">
                                            <div class="seta_sudeste">
                                                <img src="images/seta_estado.png" alt="" width="20px" class="img_seta">
                                            </div>
                                            <div class="nome_regiao">
                                                Sudeste
                                            </div>
                                        </div>
                                        
                                        <div class="casos_regiao">
                                            <div class="column1 column"><?= ($array_regiao_dados["Sudeste"]["Confirmado"])?></div>
                                            <div class="column2 column"><?= ($array_regiao_dados["Sudeste"]["Confirmado"]) - ($array_regiao_dados["Sudeste"]["Recuperado"])?></div>
                                            <div class="column3 column"><?= ($array_regiao_dados["Sudeste"]["Recuperado"])?></div>
                                        </div>

                                        <div class="estado_sudeste estados">
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Santa Catarina
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>

                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Paraná
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Rio Grande so Sul
                                                </div>
                                                <div class="casos_estado">
                                                    <div class="column1 column">32145</div>
                                                    <div class="column2 column">32145</div>
                                                    <div class="column3 column">32145</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Sul-->
                                    <div class="regiao">
                                        <div class="seta_regiao">
                                            <div class="seta_sul">
                                                <img src="images/seta_estado.png" alt="" width="20px" class="img_seta">
                                            </div>
                                            <div class="nome_regiao">
                                                Sul
                                            </div>
                                        </div>
                                       
                                        <div class="casos_regiao">
                                            <div class="column1 column"><?= ($array_regiao_dados["Sul"]["Confirmado"])?></div>
                                            <div class="column2 column"><?= ($array_regiao_dados["Sul"]["Confirmado"]) - ($array_regiao_dados["Sul"]["Recuperado"])?></div>
                                            <div class="column3 column"><?= ($array_regiao_dados["Sul"]["Recuperado"])?></div>
                                        </div>

                                        <div class="estado_sul estados">
                                            <div class="estado">
                                                <div class="nome_estado">
                                                    Santa Catarina
                                                </div>
                                                <?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con_sc = mysqli_query($conexao,"call casos_estado('Santa Catarina','Confirmado')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con_sc);
                                                 $sql_confirmado_sc = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con_sc);
                                                 mysqli_close($conexao);

                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_rec_sc = mysqli_query($conexao,"call casos_estado('Santa Catarina','Recuperado')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_rec_sc);
                                                     $sql_recuperado_sc = $sql_con_row['total'];
                                                     mysqli_free_result($sql_rec_sc);
                                                     mysqli_close($conexao);   
                                                     include ("../Cadastro_Login/conecta.php");                                        
                                        ?>
                                                <div class="casos_estado">
                                                    <div class="column1 column"><?= $sql_confirmado_sc?></div>
                                                    <div class="column2 column"><?= $sql_confirmado_sc - $sql_recuperado_sc ?></div>
                                                    <div class="column3 column"><?= $sql_recuperado_sc?></div>
                                                </div>
                                            </div>

                                            <div class="estado">
                                                <div class="nome_estado">
                                                Rio Grande do Sul
                                                </div>
                                                <?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con_rs = mysqli_query($conexao,"call casos_estado('Rio Grande do Sul','Confirmado')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con_rs);
                                                 $sql_confirmado_rs = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con_rs);
                                                 mysqli_close($conexao);

                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_con_rs = mysqli_query($conexao,"call casos_estado('Rio Grande do Sul','Recuperado')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_con_rs);
                                                     $sql_recuperado_rs = $sql_con_row['total'];
                                                     mysqli_free_result($sql_con_rs);
                                                     mysqli_close($conexao);   
                                                     include ("../Cadastro_Login/conecta.php");                                        
                                        ?>
                                                <div class="casos_estado">
                                                    <div class="column1 column"><?= $sql_confirmado_rs?></div>
                                                    <div class="column2 column"><?= $sql_confirmado_rs - $sql_recuperado_rs ?></div>
                                                    <div class="column3 column"><?= $sql_recuperado_rs?></div>
                                                </div>
                                            </div>
                                            <div class="estado">
                                                <div class="nome_estado">
                                                      Paraná
                                                </div>
                                                <?php
                                        include ("../Cadastro_Login/conecta.php");  
                                             $sql_con = mysqli_query($conexao,"call casos_estado('Paraná','Confirmado')");
                                             $sql_con_row = mysqli_fetch_assoc($sql_con);
                                                 $sql_confirmado_pr = $sql_con_row['total'];
                                                 mysqli_free_result($sql_con);
                                                 mysqli_close($conexao);

                                                 include ("../Cadastro_Login/conecta.php");  
                                                 $sql_con = mysqli_query($conexao,"call casos_estado('Paraná','Recuperado')");
                                                 $sql_con_row = mysqli_fetch_assoc($sql_con);
                                                     $sql_recuperado_pr = $sql_con_row['total'];
                                                     mysqli_free_result($sql_con);
                                                     mysqli_close($conexao);   
                                                     include ("../Cadastro_Login/conecta.php");                                        
                                        ?>
                                                <div class="casos_estado">
                                                    <div class="column1 column"><?= $sql_confirmado_pr?></div>
                                                    <div class="column2 column"><?= $sql_confirmado_pr - $sql_recuperado_pr ?></div>
                                                    <div class="column3 column"><?= $sql_recuperado_pr?></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                               
                                </div>
                            </div>
                        </section>
                    </section>
                
                    <section><!--com ajuda de api sera colocado casos do coronavirus-->
                        
                    </section>
                
                
</article><!--FIM DO ARTICLE PAINEL-->