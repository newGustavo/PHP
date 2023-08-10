<?php

// printando números 

for($i = 1; $i <= 15; $i++){
    echo "O número da vez é $i" . PHP_EOL;
}
echo "BREAK LINE" . PHP_EOL;

while ($i >= 1) {
    if ($i % 2 == 0){
        echo "O número da vez é $i" . PHP_EOL;
    }
    $i--;
}

