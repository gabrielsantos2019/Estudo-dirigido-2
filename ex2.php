<?php

print ("digite um numero:\n");
$n = (int) fgets(STDIN);

if ($n > 0) {
    print("esse numero é positivo:\n");
}

else {
    print("o numero é negativo:\n");
}