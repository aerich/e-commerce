<?php
	
		$reussit = mysql_connect("localhost","root","");
		if ($reussit==true){}
		else{echo "ECHEC";die();}

		mysql_select_db("ecommerce");
?> 