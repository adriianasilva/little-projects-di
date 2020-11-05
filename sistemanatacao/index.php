<?php 

$categorias = [];

$categorias[] ='infantil'; 
$categorias[] ='adolescente'; 
$categorias[] ='adulto';

$nome = 'Adriana';
$idade = 22;

//var_dump($nome);
//var_dump($idade);

if ($idade >=6 && $idade <=12){
   // echo 'Infantil';
   for ($i = 0; $i <= count($categorias); $i++){
       if($categorias[$i] == 'infantil'){
           echo "@ nadador@ ". $nome. " compete na categoria infantil"; 
       }
   }
}
else if ($idade >=13 && $idade <=18){
    //echo 'Adolescente';
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            echo "@ nadador@ ". $nome. " compete na categoria adolescente"; 
        }
    }
}
else if ($idade > 18){
    //echo 'Adulto';
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            echo "@ nadador@ ". $nome. " compete na categoria adulto"; 
        }
    }
}
else{
    echo "Olá, nadadorx ". $nome. ", você não tem idade suficiente para concorrer!";
}