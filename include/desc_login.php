<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?
$string = "";
$n = 0;
$user = $_REQUEST["user"];
$passw =$_REQUEST["passw"];

mysql_connect($local,$user,$password);
			
if(strlen($user) > 0){
  $result=mysql_query("SELECT count(user) FROM test.utenze where user ='".$user."'"); 
  $row=mysql_fetch_row($result);
  if($row[0] == 0){
   $string .= "Username non trovato, ";
   $n++;
  }
}else{
 $string .= "Manca username, ";
 $n++;
}


if(strlen($passw) > 0){
 if(strlen($passw) >= 8){
  if (!preg_match('#[0-9]#',$passw)){
   $string .= "la password deve contenere almeno un numero, ";
   $n++;
  }else{
   $result=mysql_query("SELECT count(password) FROM test.utenze where password ='".$passw."' and user ='".$user."'"); 
   $row=mysql_fetch_row($result);
   if($row[0] == 1){
    $_SESSION["password"] = $passw;
   $_SESSION["user"] = $user;
   }else if($row[0] == 0){
    $string .= "Password errata, ";
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

$esito_login = substr($string, 0, -2);
print("<form action=\"/index.php\" method=\"post\" id=\"fInvia\" name=\"fInvia\" style=\"visibility:hidden\">
<input type=text name=\"query\" value=\"".$esito_login."\" >
		<input type=\"text\" name=\"tab\" value=\"4\">
		<input type=\"submit\" name=\"btnSubmit\">
	</form>
	<script>document.fInvia.submit();</script>
");


?>
</body>
</html>