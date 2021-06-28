<?php

$array_regiao = [];
$sql = mysqli_query($conexao,"Select * from pega_total_regiao_vw");
    if(mysqli_num_rows($sql)>0){
        while($row = mysqli_fetch_assoc($sql)){
            $array_regiao[] = $row['nome_reg'];
        }
        mysqli_free_result($sql);
    }
$array_regiao_dados = array();
     $array_tipo_casos = ['Confirmado','Recuperado'];   
    
        for($i=0;$i<count($array_regiao);$i++){
            $array_regiao_dados[] = $array_regiao[$i];
            for($j=0;$j<count($array_tipo_casos);$j++){
                $sql = mysqli_query($conexao,"call casos_regiao('".$array_tipo_casos[$j]."','".$array_regiao[$i]."')");
                $fetch = mysqli_fetch_assoc($sql);
                mysqli_free_result($sql);
                mysqli_close($conexao);
                include ("../Cadastro_Login/conecta.php");
                $sql_total = $fetch['total'];
                $array_regiao_dados[$array_regiao[$i]][$array_tipo_casos[$j]] =  $sql_total;
            }         
        }      
 
 // $array_regiao_dados[$array_regiao[$i]][] = array($array_tipo_casos[$j] => $sql_total);
?>