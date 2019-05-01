<?php



    $nupar=0;
    $nuimpar=0;
    $vezes=1;

    do{
        print  "Digite um número: ";
        $nu  = (float) fgets (STDIN);
    
    if ($nu % 2 == 0){
        $nupar ++ ;
    }
    
    if ( $nu % 2 != 0){
        $nuimpar ++;
    }

    $vezes ++ ;
}

    while ($vezes <= 10);

    if ( $nuimpar != 1  and  $nupar != 1 ){

        print  " Quantidade de dados impares: $nuimpar \n Quantidade de números pares: $nupar " ;
    }

    elseif ($nuimpar == 1  and  $nupar != 1 ){

        print  "Quantidade de número impar: $nuimpar \n Quantidade de números pares: $nupar ";}
    
    elseif ($nuimpar =! 1  and  $nupar == 1 ) {
    
        print  " Quantidade de números iguais: $nuimpar \n Quantidade de número: $nupar ";}
    
    elseif ( $nuimpar == 1  and  $nupar == 1 )  {
    
        print  " Quantidade de número impar: $nuimpar \n Quantidade de número: $nupar " ;};
