<?php

if(strlen($_SESSION["user"]) > 0){
	$cols = array();
	mysql_connect($local,$user,$password);

	$query = "SHOW COLUMNS FROM test.utenze";
	$result=mysql_query($query); 
	while($rows=mysql_fetch_row($result))
		array_push($cols, $rows[0]);
	
	print("<table border=0>");
	
	mysql_connect($local,$user,$password);
	$query = "SELECT * FROM test.utenze where user = '".$_SESSION["user"]."'";
	$result2=mysql_query($query); 
	$row=mysql_fetch_row($result2);
	for($i = 0; $i < count($row)-2; $i++){
		if($cols[$i] == "user")
			print("<tr><td colspan=3><center>".$row[$i]."</center></td></tr>");
		else
			print("<tr><td>".$cols[$i]."</td><td width=\"10\"></td><td>".$row[$i]."</td></tr>");
	}
		
	print("</table>");

}else{
	print("Non sei loggato. <a href=\"index.php?page=login&section=5\">Loggati qui</a>");
}
?>