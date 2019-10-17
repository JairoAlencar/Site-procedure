<?php

$conn = mysqli_connect("localhost", "root", "", "loja", "3306");

 try {
    $num = 8;
    $sql = 'CALL sp_cadastro_de_cliente($nome, $rg);';
    $stm = $conn->prepare($sql);
    $stm->bindParam(':num',$num,PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT);
    $stm->execute();  
   
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
print_r($num);  





        //conecta no banco
          $connection = mysqli_connect("localhost", "root", "", "loja", "3306");

          //executa o store procedure
          $result = mysqli_query($connection, 
             "CALL sp_cadastro_de_cliente();") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n" .
                       $row[1] . "<br>\n"; 
          }