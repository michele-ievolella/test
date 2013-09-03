<?
print("
<form action=\"index.php?page=desc_reg&section=5\" method=post>
<table border=0>
<tr><td>UserName</td><td><input type=text name=user></td></tr>
<tr><td>Nome</td><td><input type=text name=nome></td></tr>
<tr><td>Cognome</td><td><input type=text name=cognome></td></tr>
<tr><td>Eta'</td><td><input type=text name=eta></td></tr>
<tr><td>Mail</td><td><input type=text name=mail></td></tr>
<tr><td>Password</td><td><input type=password name=passw></td></tr>
<tr><td>Ripeti Password</td><td><input type=password name=passw1></td></tr>
<tr><td colspan=2><input type=submit value=Registrati></td></tr>
<tr><td><input type=text value=".$_REQUEST["section"]." name=section style=\"visibility:hidden; height:0px;\"></td><td><input type=text value=".$_REQUEST["level"]." name=level style=\"visibility:hidden; height:0px;\"></td></tr>
</table>
</form>
<br>Sei già registrato? <a href=index.php?page=login&section=5> loggati</a>");
?>