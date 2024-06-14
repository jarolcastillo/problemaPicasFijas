<?php

if($_POST['peticion'] == 'obtenerCodigo'){
    $numero1=mt_rand(0,9);
    $numero2=mt_rand(0,9);
    while ($numero1 == $numero2) {
        $numero2=mt_rand(0,9);
    }
    $numero3=mt_rand(0,9);
    while ($numero1 == $numero3 || $numero2 == $numero3) {
        $numero3=mt_rand(0,9);
    }
    $numero4=mt_rand(0,9);
    while ($numero1 == $numero4 || $numero2 == $numero4 || $numero3 == $numero4) {
        $numero4=mt_rand(0,9);
    }
    $numero = $numero1.$numero2.$numero3.$numero4;
    
    echo json_encode(array(
        'response' => 'correct',
        'info' => $numero
    ));
    return false;
}

if($_POST['peticion'] == 'compararNumero'){
    $numeroInicial = $_POST['numeroInicial'];
    $numeroComparar = $_POST['numeroComparar'];

    $contFijas = 0;
    $contPicas = 0;
    $banNumRep = false;

    if($numeroComparar[0] == $numeroComparar[1] || $numeroComparar[0] == $numeroComparar[2] || $numeroComparar[0] == $numeroComparar[3]){
        $banNumRep = true;
    }
    if($numeroComparar[1] == $numeroComparar[0] || $numeroComparar[1] == $numeroComparar[2] || $numeroComparar[1] == $numeroComparar[3]){
        $banNumRep = true;
    }
    if($numeroComparar[2] == $numeroComparar[0] || $numeroComparar[2] == $numeroComparar[1] || $numeroComparar[2] == $numeroComparar[3]){
        $banNumRep = true;
    }
    if($numeroComparar[3] == $numeroComparar[0] || $numeroComparar[3] == $numeroComparar[1] || $numeroComparar[3] == $numeroComparar[2]){
        $banNumRep = true;
    }

    if($banNumRep){
        echo json_encode(array(
            'response' => 'error',
            'info' => 'Por favor trate de no repetir los numeros'
        ));
        return false;
    }

    if($numeroInicial[0] == $numeroComparar[0]){
        $contFijas++;
    }
    if($numeroInicial[1] == $numeroComparar[1]){
        $contFijas++;
    }
    if($numeroInicial[2] == $numeroComparar[2]){
        $contFijas++;
    }
    if($numeroInicial[3] == $numeroComparar[3]){
        $contFijas++;
    }

    if($numeroComparar[0] == $numeroInicial[1] || $numeroComparar[0] == $numeroInicial[2] || $numeroComparar[0] == $numeroInicial[3]){
        $contPicas++;
    }
    if($numeroComparar[1] == $numeroInicial[0] || $numeroComparar[1] == $numeroInicial[2] || $numeroComparar[1] == $numeroInicial[3]){
        $contPicas++;
    }
    if($numeroComparar[2] == $numeroInicial[0] || $numeroComparar[2] == $numeroInicial[1] || $numeroComparar[2] == $numeroInicial[3]){
        $contPicas++;
    }
    if($numeroComparar[3] == $numeroInicial[0] || $numeroComparar[3] == $numeroInicial[1] || $numeroComparar[3] == $numeroInicial[2]){
        $contPicas++;
    }

    
    if($contFijas == 4){
        $msm = 'VICTORIA';
    }else{
        $msm = 'El numero '.$numeroComparar.' tiene '.$contFijas.' fijas y '.$contPicas.' picas.';
    }
    

    echo json_encode(array(
        'response' => 'correct',
        'info' => $msm
    ));
    return false;
}
?>