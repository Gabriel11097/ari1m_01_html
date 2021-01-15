<form>
Area m2 <input placeholder="Area" 
	value="12800" id="a" name="a" onkeyup="calcular4()"/>

<button onclick="calcular4()">Calcular</button>
</form>
<div id="largo" style="
	padding:20px;
	background-color:pink;
">
</div>
<div id="ancho" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular4(){
	a=document.getElementById('a').value;
	x=Math.sqrt((2*a)/9);
	x=Math.round(x*100)/100;
	ancho=a/(x*3);
	ancho=Math.round(ancho*100)/100;
	document.getElementById('largo').
	innerHTML=x+' m de ancho (y)';
	document.getElementById('ancho').
	innerHTML=ancho+' m de largo (x)';
}
calcular4();
</script>

<?php
if(isset($_GET['a'])){
	$a = $_GET['a'];

	echo 'Ancho (y): '.(round(sqrt((($a*2)/9)),2));
	echo 'Largo (x): '.($a/(((sqrt(($a*2)/9)))*3));
}
?>
