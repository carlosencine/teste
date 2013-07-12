<?php
//exemplo pratico de função recursiva
function fatorial($numero) {
    if($numero<0) {
        return -1;
    }
    if($numero<=1) {
        return 1;
    }
    return $numero * fatorial($numero-1);
}
echo "O fatorial de 3 é ".fatorial(3)." <br>";
echo "O fatorial de 4 é ".fatorial(4)." <br>";
echo "O fatorial de 15 é ".fatorial(15)." <br>";
echo "<br>";
echo "esta linha é somente para demonstrar o uso do github.";
?>