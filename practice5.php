<?php 

$around = "around";

echo 'What goes ' . $around. ', comes ' . $around.  '</br>';

echo '<br>';
echo '<br>';


if(date('F', time()) == "August"){
    echo "It's August, so it's really hot . ";
}
else {
    echo "Not August, so at least not in the peak of the heat.";
}

?>