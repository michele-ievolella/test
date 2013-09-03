<div style="display: inline-block; float: left;">
	<fieldset id="aFieldset">
		<legend>{%username%}</legend>
		<table border=0 id="taccount">
			{%visualizza_account%}
		</table>
	</fieldset>
</div>


<div style="display: inline-block; float: right;">
	<fieldset id="mFieldset">
		<legend>Manager</legend>
		<div id="menu_div1" style="width: 100%; padding-right: 0px;">
			<div id="menu_div2"><div id="menu_div3"><a id="menu_p" href="#" onClick="clearManager('Foto');">Foto</a></div></div>
			<div id="menu_div2"><div id="menu_div3"><a id="menu_p" href="#">Video</a></div></div>
			<div id="menu_div2"><div id="menu_div3"><a id="menu_p" href="#">Serate</a></div></div>
			<div id="menu_div2"><div id="menu_div3"><a id="menu_p" href="#">Eventi</a></div></div>
		<br /><br />
		<div><hr style="margin-left: 5px;" /></div>
	</fieldset>
</div>
<fieldset class="mDiv" id="Foto">

	<legend class="cleg" id="Fotolegend"> Foto</legend>
	<div class="mfDiv" id="FotomfDiv">
	</div>
</fieldset>
<fieldset class="mDiv" id="Video">

	<legend class="cleg" id="Videolegend"> Video</legend>
	<div class="mfDiv" id="VideomfDiv">
	</div>
</fieldset>
<fieldset class="mDiv" id="Serate">

	<legend class="cleg" id="Seratelegend"> Serate</legend>
	<div class="mfDiv" id="SeratemfDiv">
	</div>
</fieldset>
<fieldset class="mDiv" id="Eventi">

	<legend class="cleg" id="Eventilegend"> Eventi</legend>
	<div class="mfDiv" id="EventimfDiv">
	</div>
</fieldset>
<fieldset class="mDiv" id="Benvenuto">

	<legend class="cleg" id="lBenvenuto"> Benvenuto</legend>
	<div class="mfDiv">
	</div>
</fieldset>

<script>
document.getElementById("Benvenuto").style.visibility='visible'; 
document.getElementById("lBenvenuto").style.height='20px'; 

function clearManager(idName){

	var Elements=new Array("Foto","Video","Serate","Eventi");
	for(i = 0; i < Elements.length; i++){
		if(idName == Elements[i]){
			document.getElementById(Elements[i]).style.visibility='';
			document.getElementById(Elements[i]+"legend").style.height='20px';
		}else{
			document.getElementById(Elements[i]).style.visibility='hidden';
			document.getElementById(Elements[i]+"legend").style.height='0px';
		}
	}
	
	document.getElementById("Benvenuto").style.visibility='hidden'; 
	document.getElementById("lBenvenuto").style.height='0px'; 
}

</script>