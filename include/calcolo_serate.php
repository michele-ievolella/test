<?

$elenco_serate = "";
mysql_connect($local,$user,$password);
$result=mysql_query("SELECT * FROM test.serate"); 

while($row=mysql_fetch_row($result)){
	$elenco_serate .= "<div id=\"mappa\"><a href=\"#\"  data-reveal-id=\"myModal\" onClick=\"changeInfo('img/".$row[13]."');\" \">".$row[1]."</a><br />";
	
	if($row[13] != "" && $row[13] != null){
		$elenco_serate .="<img src=\"img/".$row[13]."\" style=\"height:80px; width:80px;\"/><br />";
	}
	
	$elenco_serate .= "	Costo:".$row[6]."<br />Orario:".$row[5]."</div>";
}
?>