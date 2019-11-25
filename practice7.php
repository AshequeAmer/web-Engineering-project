<?php

	echo "<table border =\"2\" style='border-collapse: collapse'>";
	for ( $r = 1 ; $r <= 7 ; $r ++ ) 
	{ 
		echo "<tr> \n";
		for ( $c = 1 ; $c <= 7 ; $c ++ ) 
		{ 
		   $ans = $c * $r ;
		   echo "<td style='width: 50' > $ans </td> \n " ;
		}
	  	echo "</tr>";
	}
	echo "</table>";
?>