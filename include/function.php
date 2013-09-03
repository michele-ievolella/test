<?
function visualizza(){
	
	$cols = array();
	$html_content = Array();
	$visualizzazione="";
	
	if(strlen($_SESSION["user"]) > 0){

		mysql_connect($local,$user,$password);

		$query = "SHOW COLUMNS FROM test.utenze";
		$result=mysql_query($query); 
		
		while($rows=mysql_fetch_row($result))
			array_push($cols, $rows[0]);

		mysql_connect($local,$user,$password);
		
		$query = "SELECT * FROM test.utenze where user = '".$_SESSION["user"]."'";
		$result2=mysql_query($query); 
		$row=mysql_fetch_row($result2);
		
		for($i = 0; $i < count($row)-2; $i++){
			if($cols[$i] == "user")
				$html_content[0] = "Account: ".$row[$i];
			else{
				if($cols[$i] != "mail")
					$visualizzazione .="<tr><td>".$cols[$i]."</td><td>".$row[$i]."</td></tr>";
			}
		}

	}else{
		$visualizzazione .="Non sei loggato. <a href=\"javascript:stepcarousel.stepTo('mygallery', 6)\">Loggati qui</a>";
		$html_content[0] = "Account";
	}
	
	$html_content[1] = $visualizzazione;
	
	return $html_content;
}

?>