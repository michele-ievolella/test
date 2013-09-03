<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body background="img/space2.jpg">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="js/stepcarousel.js"></script>
<script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', 
	beltclass: 'belt', 
	panelclass: 'panel', 
	//autostep: {enable:true, moveby:1, pause:300000},
	panelbehavior: {speed:500, wraparound:false, wrapbehavior:'slide', persist:true},
	//defaultbuttons: {enable: true, moveby: 1, leftnav: ['img/left-arrow.png', -35, 70], rightnav: ['img/right-arrow.png', 15, 70]},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['img/null-arrow.png', -35, 70], rightnav: ['img/null-arrow.png', 15, 70]},
	statusvars: ['statusA', 'statusB', 'statusC'], 
	contenttype: ['inline'] 
})

</script>
<div id="container">
	<div id="header"></div>
	<div id="footer"></div>

	<div id="circle">MI</div>
	<div id="circle_footer">MI</div>
	<div id="copy" ><div style="display: inline-block;">&copy; 2023 by MI. All rights reserved.</div><div style="display: inline-block; float:right; padding-right:20px;  padding-bottom:3px;"><img src="img/twit.png"></div><div style="display: inline-block; float:right; padding-right:20px; padding-bottom:3px;"><img src="img/face.png"></div></div>

	<div id="menu_div1">
<?php

include('properties/connection.php');
mysql_connect($local,$user,$password);
$result=mysql_query('SELECT * FROM test.menu where Level = 0 order by Id_Menu ASC'); 

while($row=mysql_fetch_row($result)){
	print("<div id=\"menu_div2\">\n");
	print("<div id=\"menu_div3\">\n");
	print("<a href=\"javascript:stepcarousel.stepTo('mygallery', ".($row[0]+1).")\" id=\"menu_p\">".$row[2]."</a>");
	print("</div>\n");
	print("</div>");
}
?>
	</div>

	<div id="mygallery" class="stepcarousel">
		<div class="belt" id="belt">

<?php

include('properties/connection.php');
mysql_connect($local,$user,$password);
$result=mysql_query('SELECT * FROM test.menu where Level = 1 ORDER BY test.menu.Id_menu'); 

while($row=mysql_fetch_row($result)){
	print("<div class=\"panel\">\n");
	print("<div id=\"content\">\n");
	include("include/".$row[3].".php");
	print("</div>\n");
	print("</div>");
}
?>
		</div>
	</div>
</div>
</body>
</html>