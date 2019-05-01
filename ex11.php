<?php



    print "Digite um número inteiro menor que 1000: ";

    $nu= (int) fgets(STDIN);
    $centena= (int)($nu/100)%100;
    $dezena= (int)($nu/10)%10;
    $unidade= (int)($n%100)%10;

    if ($centena==1){
        if ($centena==1 and $dezena==1){   
            if ($centena==1 and $dezena==1 and $unidade==1){
                print "$nu = $centena centena, $dezena dezena e $unidade unidade\n";
                    exit;
                }                
                print "$nu = $centena centena, $dezena dezena e $unidade unidades\n";
                    exit;
                }
            
            if ($centena==1 and $unidade==1){
                print "$nu = $centena centena, $dezena dezenas e $unidade unidade\n";
                    exit;
                }    
            
                print "$nu = $centena centena, $dezena dezenas e $unidade unidades\n";
                exit;
            } 
            
            
    if ($dezena==1){
        if ($dezena==1 and $centena==1){
            if ($dezena==1 and $centena==1 and $unidade==1){
                print "$nu = $centena centena, $dezena dezena e $unidade unidade\n";
                    exit;
                }                
                print "$nu = $centena centena, $dezena dezena e $unidade unidades\n";
                    exit;
                }
            
            if ($dezena==1 and $unidade==1){
                print "$nu = $centena centenas, $dezena dezena e $unidade unidade\n";
                exit;
                }    
                        
                print "$nu = $centena centenas, $dezena dezena e $unidade unidade\n";
                exit;
            }  
                            
                            
    if ($unidade==1){
        if ($unidade==1 and $dezena==1){
            if ($centena==1 and $dezena==1 and $unidade==1){
                print "$nu = $centena centena, $dezena dezena e $unidade unidade\n";
                    exit;
                }                
                print "$nu = $centena centenas, $dezena dezena e $unidade unidade\n";
                    exit;
                }
                        
            if ($centena==1 and $unidade==1){
                print "$nu = $centena centena, $dezena dezenas e $unidade unidade\n";
                    exit;
                }    
                                    
                print "$nu = $centena centenas, $dezena dezenas e $unidade unidade\n";
                exit;
            } 
                                        
                                        
    else {
        print "$nu = $centena centenas, $dezena dezenas e $unidade unidades\n";}
