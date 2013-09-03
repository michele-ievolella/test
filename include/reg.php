<form action="include/desc_reg.php" method="get">
	<fieldset>
		<legend>Registrazione</legend>
		<div style="display: inline-block; text-align: left; margin-right: 5px;">
			<table border=0 id="treg">
				<tr><td><label>Username:</label></td><td><input type="text" name="user"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Nome:</label></td><td><input type="text" name="nome"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Cognome:</label></td><td><input type="text" name="cognome"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Mail*:</label></td><td><input type="text" name="mail"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Eta':</label></td><td><input type="text" name="eta"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Password*:</label></td><td><input type="password" name="passw"></td></tr>
				<tr><td><label style="margin: 13px 0px 15px 0px;">Conferma Password**:</label></td><td><input type="password" name="passw1"></td></tr>
			</table>
		</div>
		<br />
		<br />
		<input type="submit" value="Registrati">
		<br />
		<hr />
		<fieldset style="text-align: left;">
			<legend>Legenda</legend>
			<br />
			*: La Password deve contenere almeno: 8 caratteri, 1 numero, 1 lettera
			<br />
			**: Conferma password dev'essere uguale alla Password
		</fieldset>
	</fieldset>
</form>

<?
print("<font color=#ff3300>".$_REQUEST['esito_reg']."</font>");
?>