<?php


echo "<table border=\"1\">";


for ($i = 1; $i < 12; $i++) {
    echo "<tr>\n";
    for ($j = 1; $j < 12; $j++) {
        $result = $i * $j;
        printf("<td %</td>", $result);
    }
    echo "</tr>";
}
echo "</table>";

echo '</br>';

for($i=1; $i<=12; $i++) {
    echo "$i * $i = " . $i * $i . "</br>";
}

?>

