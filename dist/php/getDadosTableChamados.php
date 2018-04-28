<?php
    //Conectando ao banco de dados
    $con = new mysqli("localhost", "root", "root", "tinodb");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT * FROM tb_chamado INNER JOIN tb_local ON tb_chamado.id_local = tb_local.id_local;");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado);
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>