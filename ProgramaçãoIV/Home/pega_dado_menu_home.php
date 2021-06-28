
<?php
/*no menu lateral tera uma pequena apresentacao das informacoes do user*/
                $sql_perfil = mysqli_query($conexao,"select * from info_perfil_home_vw where cod_usu = '".$codigo."'");
                if(mysqli_num_rows($sql_perfil)>0){
                    while($perfil = mysqli_fetch_assoc($sql_perfil)){
                        $data_nas = $perfil['data_nasc_pac'];
                        $peso = $perfil['peso_pac'];
                        $altura = $perfil['alt_pac'];
                        $gen_pac = $perfil['gen_pac'];
                    }
                
            
                    function descobrirIdade($dataNascimento){
                        $data       = explode("-",$dataNascimento); // aqui ira separa dia mes ano colocando em um array
                        
                        $anoNasc    = $data[0];
                        $mesNasc    = $data[1];
                        $diaNasc    = $data[2];
                    
                        $anoAtual   = date("Y");
                        $mesAtual   = date("m");
                        $diaAtual   = date("d");
                    
                        $idade      = $anoAtual - $anoNasc; // ate aqui  faz ano do nascimento - ano corrente
                    
                        if ($mesAtual < $mesNasc){ // ai aqui vem para o mes caso o user ainda nao fez aniversário
                            $idade -= 1;
                            return $idade;
                        } elseif ( ($mesAtual == $mesNasc) && ($diaAtual <= $diaNasc) ){
                            $idade -= 1;
                            return $idade;
                        }else
                            return $idade;
                    }

                    $idade =  descobrirIdade($data_nas);
                }
                ?>