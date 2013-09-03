<?if($_SESSION["user"] == "" || $_SESSION["user"] == null){?>

<form action="include/desc_login.php">
	<fieldset id="fieldstyle">
		<legend class="cleg">Login: </legend>
		<div style="display: inline-block; text-align: left; margin-right: 5px;">
			<table border=0 id="treg">
				<tr><td><label>Username:</label></td><td><input type="text" size="30" name="user"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Password:</label></td><td><input type="password" size="30" name="passw"></td></tr></tr>
			</table>
		</div>
		<br />
		<br />
		<input type="submit" value="Login">
		<br />
		<hr />
	</fieldset>
</form>
<div>
	<font>Non sei registrato?</font> <a href="#" onClick="javascript:stepcarousel.stepTo('mygallery', 3);">Registrati qui</a>
</div>
<br />
<?}else{
print("sei gia' loggato come: ".$_SESSION["user"]."<br>");
print("<a href=\"include/logout.php\">Logout</a>");
}
print($_REQUEST['esito_login']);
?>