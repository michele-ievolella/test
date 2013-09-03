<?php
	session_start();
	error_reporting(0);
	include("include/function.php");
?>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
<link href="css/reveal.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/jquery.reveal.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
 
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

<script type="text/javascript">

function changeInfo(strImg){
	document.getElementById('imgReveal').src = strImg;
	document.getElementById('imgReveal').style.height = '400px';
	document.getElementById('imgReveal').style.width = '400px';
	
	document.getElementById("h1Reveal").innerHTML = "yourTextHere";
}

</script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script>

function teest(lat,lon) {
	var myLatlng = new google.maps.LatLng(lat,lon);
	var map_canvas = document.getElementById('map_canvas');
	var map_options = {
		center: new google.maps.LatLng(lat,lon),
		zoom: 17,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(map_canvas, map_options);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Hello World!'
	});
}
  
function initialize() {
	var myLatlng = new google.maps.LatLng(45.465549,9.186537);
	var map_canvas = document.getElementById('map_canvas');
	var map_options = {
		center: new google.maps.LatLng(45.465549,9.186537),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(map_canvas, map_options);

}
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="https://raw.github.com/wandoledzep/bxslider/master/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider1').bxSlider();
  });
</script>

</head>
<body>

<div id="assoluto">
	<table style="margin:0 auto;" background="img/space3.jpeg" id="tcontainer">
		<tr>
			<td>
				
				<div id="header">
					<div id="circle">MI</div>
					
					<div id="menu_div1">
						<?
							include('properties/connection.php');
							mysql_connect($local,$user,$password);
							$result=mysql_query("SELECT * FROM test.menu where Level = '0' order by Id_Menu ASC"); 
							
							$n = 1;
							while($row=mysql_fetch_row($result)){
								print("<div id=\"menu_div2\">\n");
								print("<div id=\"menu_div3\">\n");
								print("<a href=\"javascript:stepcarousel.stepTo('mygallery', ".$n.")\" id=\"menu_p\">".$row[2]."</a>");
								print("</div>\n");
								print("</div>");
								$n++;
							}
						?>
					</div>
				</div>
				
				<div id="container">
					<div id="mygallery" class="stepcarousel">
						<div class="belt" id="belt">
							<?
								$divimgmappa = "";
								$contenuto = visualizza();
								$username = $contenuto[0];
								$visualizza_account = $contenuto[1];
								$width= 0;
								include('properties/connection.php');
								include('include/calcolo_serate.php');
								
								mysql_connect($local,$user,$password);
								$result=mysql_query("SELECT * FROM test.locali"); 

								while($row=mysql_fetch_row($result)){
									$divimgmappa .= "<div id=\"mappa\">\n";
									$divimgmappa .= "<a href=# onClick=\"google.maps.event.addDomListener(window, 'load', teest(".$row[1]."));\">\n";
									$divimgmappa .= "<img src=\"img/".$row[2]."\" style=\"height: 80px; width: 80px;\"/ title=\"Posizione: ".$row[0]."\">\n";
									$divimgmappa .=" </a>\n";
									$divimgmappa .= "<br />\n";
									$divimgmappa .= $row[0]."\n";
									$divimgmappa .= "<br />\n";
									$divimgmappa .= "<a href=\"".$row[3]."\">".$row[3]."</a>\n";
									$divimgmappa .= "</div>\n";
									$width += 215;
								}

								
								mysql_connect($local,$user,$password);
								$result=mysql_query("SELECT * FROM test.menu where Level = '1' ORDER BY test.menu.Id_menu"); 

								while($row=mysql_fetch_row($result)){
									print("<div class=\"panel\">\n");
									print("<div id=\"content\">\n");
									if($row[3] != "visualizza" && $row[3] != "serate"){
										include("include/".$row[3].".php");
									}else if($row[3] == "visualizza" ){
										$html_content = file_get_contents("include/visualizza.php");
										$codice_html = preg_replace("/\{%(\w+)%\}/e", "\$\\1",$html_content);
										print($codice_html);
									}else if($row[3] == "serate" ){
										$html_content = file_get_contents("include/serate.php");
										$codice_html = preg_replace("/\{%(\w+)%\}/e", "\$\\1",$html_content);
										print($codice_html);
									}
									
									print("</div>\n");
									print("</div>");
								}
							?>
						</div>
					</div>
				</div>
				
				<div id="footer">
					<div id="circle" style="margin-right: 15px;">MI</div>
					<div style="display: inline-block;color: #ffffff; color: #000000;">
						&copy; 2023 by MI. All rights reserved.
						<img src="img/twit.png" id="img">
						<img src="img/twit.png" id="img">
						<img src="img/twit.png" id="img">
					</div>
				</div>
				
			</td>
		</tr>
	</table>
</div>

		<div id="myModal" class="reveal-modal">
			<h1 id="h1Reveal">Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a>
			<br />
			<img src="" id="imgReveal" />
		</div>

</body>
</html>