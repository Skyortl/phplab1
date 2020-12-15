<?php
const MIN_VALUE = 1;
const MAX_VALUE = 10;
$cols = rand(MIN_VALUE, MAX_VALUE);
$rows = rand(MIN_VALUE, MAX_VALUE);
echo "<table style=\"border-collapse: collapse; border-color:black;\" border=1>";
for ($i=0; $i<$rows; $i++) {
    echo "<tr>"; 
    for ($j=0; $j<$cols; $j++) {
        $currentValue = ($j+1)*($i+1);
        $tdStyle = !$j || !$i ? 
        "background:gray;text-align:center;" : 
        "background:lightgray;";
        echo "<td style=$tdStyle>".$currentValue."</td>";
    }
    echo "</tr>"; 
}
echo "</table>";
?>