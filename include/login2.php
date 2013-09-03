<?
if(strlen($_SESSION["user"]) > 0)
 print("Sei loggato come: ".$_SESSION["user"]);
else{
print("
<form action=\"include/desc_login.php\" method=post>
<table border=0>
<tr><td>UserName</td><td><input type=text name=user></td></tr>
<tr><td>Password</td><td><input type=password name=passw></td></tr>
<tr><td colspan=2><input type=submit value=Login></td></tr>
</table>
</form>
<br>Nuovo utente? <a href=index.php?page=reg&section=4&level=1>Registrati</a>
");
if(strlen($_SESSION['mlogin']) > 2){
print("<script>alert('".$_SESSION['mlogin']."');</script>");
$_SESSION['mlogin'] = "";
}
}
?>