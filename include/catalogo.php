
<?
$query = "SELECT DISTINCT categoria FROM test.catalogo";
$categorie=mysql_query($query); 
print("<table style=\"border: 1px solid #000000;\"><tr>\n");
$namecat = array();

$w = 0;
while($cate=mysql_fetch_row($categorie)){
	print("<td><a href=\"#\" style=\"padding: 5px 10px; color: #0099FF;  \" onClick=\"categorie(".$w.",'categorie');\">".$cate[0]."</a></td>\n");
	array_push($namecat, $cate[0]);	
	$w++;
}

print("</tr></table>");
print("<hr /><br />");
$j = 0;
for($icat = 0; $icat < count($namecat); $icat++){
	if($j == 0){
		print("<div id=categoria".$icat."><table>\n");
		$j++;
	}else
		print("<div id=categoria".$icat." style=\"display: none;\"><table>\n");
$query = "SELECT * FROM test.catalogo WHERE categoria='".$namecat[$icat]."'";
$categorie=mysql_query($query); 

while($cate=mysql_fetch_row($categorie)){

	print("<tr><td><img src=/img/facebook.png></td><td width=20></td><td>Nome: ".$cate[0]." <br />\nDescrizione. ".$cate[1]."<br />\nPrezzo: ".$cate[2]."<br />\n Categoria:".$cate[3]."</td></tr>\n");

	print("<tr><td colspan=3><hr /></td></tr>\n");
}
print("</table></div>\n");
}
?>