<html>
<head>
</head>
<body>
<?php
$string = "";
$n = 0;
$user = $_REQUEST['user'];
$nome = $_REQUEST['nome'];
$cognome =$_REQUEST['cognome'];
$eta =$_REQUEST['eta'];
$mail =$_REQUEST['mail'];
$passw =$_REQUEST['passw'];
$rpassw =$_REQUEST['passw1'];
if(strlen($user) > 0){
  $result=mysql_query("SELECT count(user) FROM test.utenze where user ='".$user."'"); 
  $row=mysql_fetch_row($result);
  if($row[0] > 0){
   $string .= "User già esistente, ";
   $n++;
  }
}else{
 $string .= "Manca username, ";
 $n++;
}

if($eta < 0 || $eta > 100){
 $string .= "Età errata, ";
 $n++;
}

if(strlen($mail) > 0){
 if(strpos($mail,"@") == false){
  $string .= "Mail errata, ";
  $n++;
 }else if(strpos($mail,'.') == false){
  $string .= "Mail errata, ";
  $n++;
 }else{
  $result=mysql_query("SELECT count(mail) FROM test.utenze where mail ='".$mail."'"); 
  $row=mysql_fetch_row($result);
  if($row[0] > 0){
   $string .= "Mail già esistente, ";
   $n++;
  }
 }
}else{
 $string .= "Mail mancante, ";
 $n++;
}

if(strlen($passw) > 0){
 if(strlen($passw) >= 8){
  if (!preg_match('#[0-9]#',$passw)){
   $string .= "la password deve contenere almeno un numero, ";
   $n++;
  }else{
   if ($passw != $rpassw){
    $string .= "Le due password inserite sono diverse, ";
    $n++;
   }
  }
 }else{
  $string .= "la password è troppo corta, ";
  $n++; 
 }
}else{
 $string .= "Manca la password, ";
 $n++;
}
$esito_reg = substr($string, 0, -2);
if($n == 0){
mysql_query("INSERT INTO test.utenze (user, nome, cognome, eta, mail, password, Level)
 VALUES('".$user."', '".$nome."', '".$cognome."', '".$eta."', '".$mail."', '".$passw."', 99);");
 $esito_reg.= "Registrazione avvenuta con successo";
}

print("<form action=\"/index.php\" method=\"post\" id=\"fInvia\" name=\"fInvia\" style=\"visibility:hidden\">
		<input type=text name=\"esito_reg\" value=\"".$esito_reg."\" >
		<input type=\"text\" name=\"tab\" value=\"4\">
		<input type=\"submit\" name=\"btnSubmit\">
	</form>
	<script>document.fInvia.submit();</script>
");

?>
</body>
</html>