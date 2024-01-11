<?php


// Petlje

// while petlje

$i = 0;
while ($i < 15){
    echo $i++;
}

while ($i < 15){
    break;        // Izlaz iz petlje
}

while (true){
    while ($i >10){
        break 2;    // Izlaz it više petlji
    }
}

// do petlje

$a =0;
do{
    echo $a++;
} while ($a < 15);

// for

for($i = 0; $i < 15; $i++ ){
    echo $i;
}

// foreach

$programskijezici = ['php','java','c#','c++'];
foreach($programskijezici as $jezik){
    echo $jezik;
}


