<?php

for ($counter=1; $counter <=100 ; $counter++) { 
    if ($counter % 2 == 0) {
        continue;
    }
    echo "ini bilangan : $counter ". PHP_EOL;
} 