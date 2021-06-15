<!DOCTYPE html>
<html lang="pt-br">

    <?php
    /*aqui ira verificar se o usuario esta logado para que nao consigam burlar o sistema digitando direto na url a página home*/
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset($_SESSION['password']) == true)){
            unset($_SESSION['login']);
            unset($_SESSION['password']);
           header('Location: ../Cadastro_Login/Cadastro_Login.html');
        }
        $logado = $_SESSION['login'];
        include ("../Cadastro_Login/conecta.php");
    ?>
    <head>
        <title>CMorbus19</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        <section id="secao_principal">
            secao principal
            
           <section id="container_sin_pre"><!-- aqui ficará parte do sintomas, uma apresentação dos sintomas aos usuarios-->
        
                <div class="container_figuras"><!--container dos sintomas-->
                    <img src="Febre.png" alt="Pessoa com Febre" width=120px class="img_sintoma1">
                    <img src="tossir.png" alt="Pessoa com Febre" width=120px class="img_sintoma">
                    <img src="dor_corpo.png" alt="Pessoa com Febre" width=120px class="img_sintoma">
                    <img src="falta_ar.png" alt="Pessoa com Febre" width=120px class="img_sintoma">
                </div>
                <div class="container_recomendacao">

                    <div class="recomendacoes">
                        <p class="recomendacao">Se tiveres algum dos sintomas descritos ao lado,sugerimos que siga as intruções de como se proteger e também de como não transmitir a doença a outras pessoas e  pedimos que procure um médico imediatamente.</p>
                        <p class="recomendacao">E se quiseres poderá nos informar como está sua situação logo abaixo na página</p>
                    </div>

                    <div class="medico_instrucao">
                        <img src="Med_instrucoes.png" width=200px height=400px alt="Medico_instrucoes" class="img_med_instucao">
                    </div>
                </div>
           </section> 
            
           <section id="container_sin_pre"><!-- aqui ficará parte das precausoes, uma apresentação das precausoes a serem tomadas aos usuarios-->
        
                <div class="container_figuras"><!--container dos precausoes-->
                    <img src="tossir_cotovelo.png" alt="Pessoa com Febre" width=120px class="img_sintoma1">
                    <img src="tossir_cotovelo.png" alt="Pessoa com Febre" width=120px class="img_sintoma">
                    <img src="tossir_cotovelo.png" alt="Pessoa com Febre" width=120px class="img_sintoma">
                    <img src="tossir_cotovelo.png" alt="Pessoa com Febre" width=120px class="img_sintoma">
                </div>
                <div class="container_recomendacao">

                    <div class="recomendacoes">
                        <p class="recomendacao">Fique seguro, fique em casa</p>
                    </div>

                    <div class="medico_instrucao">
                        <img src="Norse_instrucao.png" width=200px height=400px alt="Medico_instrucoes" class="img_med_instucao">
                    </div>
                </div>
            </section> 

            <article id="painel"><!--CONTERÁ ESTATISTICAS CASOS NOVOS RECUPERADOS GERAL  E POR REGIOES-->
                painel    
            <section id="estatistica"><!--ESTATISTICAS CASOS RECUPERADOS CONFIRMADOS  GERAL-->
                    <div class="cards">
                        <?php
                          $sql_sus =  mysqli_num_rows(mysqli_query($conexao,"select * from paciente p inner join status s on p.cod_status = s.cod_status where s.des_status = 'Suspeito'"));   
                        ?>
                        <h2>Casos suspeitos</h2>
                        <div><?=  ($sql_sus); ?></div>
                    </div>
                    <div class="cards">
                        <?php
                          $sql_con = mysqli_num_rows(mysqli_query($conexao,"select * from paciente p inner join status s on p.cod_status = s.cod_status where s.des_status = 'Confirmado'"));
                        ?>
                        <h2>Casos confirmados</h2>
                        <div><?= ($sql_con); ?></div>
                    </div>  
                    <div class="cards">
                        <?php
                          $sql_rec =  mysqli_num_rows(mysqli_query($conexao,"select * from paciente p inner join status s on p.cod_status = s.cod_status where s.des_status = 'Recuperado'"));   
                        ?>
                        <h2>Casos recuperados</h2>
                        <div><?= ($sql_rec);?></div>
                    </div>
                    <div class="cards">
                        <h2>Casos Ativos</h2>
                        <div><?= (($sql_con)-($sql_rec));?></div>
                    </div>
                </section>
        
                <section id="estatistica_regiao"><!--ESTATISTICAS POR REGIOES-->
                    <div class="header_estatistica_regiao">
                        <h2>Veja os casos por regiões</h2>
                    </div>
                    <section id="mapa_regiao">
                        <div class="mapa">
                            <img src="southamerica.svg" alt="southamerica" class="img_mapa">
                        </div>
                        <div class="container_regioes">
                            container_regioes
                            <div class="header_regioes">
                                header regioes<div class="column1 column">Total de casos</div><div class="column2 column">Casos ativos</div><div class="column3 column">Casos recuperados</div>
                            </div>
                            <div class="regioes">
                                regioes
                                <div class="regiao">
                                    <div class="nome_regiao">
                                        Brasil
                                    </div>
                                    <div class="casos_regiao">
                                        <div class="column1 column">32145</div>
                                        <div class="column2 column">32145</div>
                                        <div class="column3 column">32145</div>
                                    </div>
                                </div>
                                <div class="regiao  ">
                                    <div class="nome_regiao margin">
                                        Norte
                                    </div>
                                    <div class="casos_regiao margin">
                                        <div class="column1 column">32145</div>
                                        <div class="column2 column">32145</div>
                                        <div class="column3 column">32145</div>
                                    </div>
                                </div>
                                <div class="regiao  ">
                                    <div class="nome_regiao margin">
                                        Nordeste
                                    </div>
                                    <div class="casos_regiao ">
                                        <div class="column1 column">32145</div>
                                        <div class="column2 column">32145</div>
                                        <div class="column3 column">32145</div>
                                    </div>
                                </div>
                                <div class="regiao  ">
                                    <div class="nome_regiao margin">
                                        Sudeste
                                    </div>
                                    <div class="casos_regiao">
                                        <div class="column1 column">32145</div>
                                        <div class="column2 column">32145</div>
                                        <div class="column3 column">32145</div>
                                    </div>
                                </div>
                                <div class="regiao  ">
                                    <div class="nome_regiao ">
                                        Centro-Oeste
                                    </div>
                                    <div class="casos_regiao">
                                        <div class="column1 column">32145</div>
                                        <div class="column2 column">32145</div>
                                        <div class="column3 column">32145</div>
                                    </div>
                                </div>
                                <div class="regiao  ">
                                    <div class="nome_regiao">
                                        Sul
                                    </div>
                                    <div class="casos_regiao">
                                        <div class="column1 column">32145</div>
                                        <div class="column2 column">32145</div>
                                        <div class="column3 column">32145</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </article><!--FIM DO ARTICLE PAINEL-->

            <section id="secao_perguntas"><!--secao das perguntas que os usuario poderao fazer aos médicos-->
                <div class="medicos">
                    <img src="medicos.jpg" alt="medicos" >
                </div>
                <div class="pergunta">
                    <h2>Deixe uma pergunta a nossa equipe médica!</h2>
                    <form action="">
                        <textarea name="pergunta" rows="10" cols="40">Deixe aqui sua pergunta...
                        </textarea>
                    </form>
                </div>
            </section>

        </section><!--FIM DA SECAO PRINCIPAL-->
    </body>
</html>