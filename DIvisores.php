<?php
$divisor = readline("Digite o número que deseja dividir: ");
for ($i = 1;$i<=$divisor;$i++){
    if ($divisor%$i == 0){
        echo $divisor." / ".$i." = ".$divisor/$i.PHP_EOL;

    }

}

