<?php


$num = $_GET['txtNum'];

    $antecessor=0;
    $sucessor=1;

    if($num<=0){
        echo("Digite um número maior que 0!");
    }

    else{

    echo("A série de Fibonacci com ".$num." termos é:");
    for($i=1;$i<=$num;$i++){
        echo("   ".$sucessor);
        $atual=$sucessor;
        $sucessor=$sucessor+$antecessor;
        $antecessor=$atual;

        
    }

}
?>