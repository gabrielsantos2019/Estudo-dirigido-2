<?php


        print "Digite f ou m para informar seu sexo:\n";
    
        $sexo = fgetc(STDIN);
    
        if($sexo=="m"){
    
            print "O seu sexo é Masculino.\n";       
    
    }
    
    else
    
        if($sexo== "f"){ 
    
            print "O seu sexo é Feminino.\n";    
    
    }

    else
    <?php


    print "digite uma letra: \n ";

    $a = fgets (STDIN);

    if ($a == 'A' or $a == 'E' or $a == 'I' or $a == 'O' or $a == 'U') {

        print "\n é uma vogal \n";

    }

    else {

        print "\n é uma consoante \n";

    }
    if($sexo!= "f" or "m"){
    
        print "Inválido.\n";
    }
