<?
session_start();
$_SESSION["user"] = "";

print("	<form action=\"/index.php\" method=\"post\" id=\"fInvia\" name=\"fInvia\" style=\"visibility:hidden\">
			input type=\"submit\" name=\"btnSubmit\">
		</form>
		<script>document.fInvia.submit();</script>
");
?>