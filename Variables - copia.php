<h1>Problemas</h1>

<h2>Las pelotas de tenis se envasan en tubos cilíndricos que contienen tres pelotas.Sabiendo que cada pelota tiene un diametro de 8cm,calcula la longitud del cilindro.</h2>
<form>
Pelotas<input placeholder="Pelotas" 
	value="3" id="Pelotas" name="Pelotas" onkeyup="calcular1()"/>
Diametro <input placeholder="Diametro"
	value="8"/ id="Diametro" name="Diametro" onkeyup="calcular1()">
<button onclick="calcular1()">Calcular</button>
</form>
<div id="longitud" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular1(){
	Pelotas=document.getElementById('Pelotas').value;
	Diametro=document.getElementById('Diametro').value;
	parseInt(Pelotas);
	parseInt(Diametro);
	longitud=(parseInt(Pelotas)*parseInt(Diametro));
	document.getElementById('longitud').innerHTML=longitud+' cm';
}
calcular1();
</script>

<?php
if(isset($_GET['Pelotas'])){
	$Pelotas = $_GET['Pelotas'];
	$Diametro = $_GET['Diametro'];
	echo 'longitud :'.($Pelotas*$Diametro); 
}
?>

<h2>Halla el área de un rectángulo cuya diagonal mide 10cm y uno de sus lados 6cm.</h2>
<form>
 Diagonal<input placeholder="Diagonal" 
	value="10" id="Diagonal" name="Diagonal" onkeyup="calcular2()"/>
Lado <input placeholder="Lado"
	value="6"/ id="Lado" name="Lado" onkeyup="calcular2()">
<button onclick="calcular2()">Calcular</button>
</form>
<div id="Area" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular2(){
	Diagonal=document.getElementById('Diagonal').value;
	Lado=document.getElementById('Lado').value;
	Area=(Lado*(Math.sqrt((Diagonal*Diagonal)-(Lado*Lado))));
	document.getElementById('Area').innerHTML=Area+' Cm2';
}
calcular2();
</script>

<?php
if(isset($_GET['Diagonal'])){
	$Diagonal = $_GET['Diagonal'];
	$Lado = $_GET['Lado'];
	echo 'Area: '.($Lado*(sqrt(($Diagonal*$Diagonal)-($Lado*$Lado))));
}
?>


<h2>En una oposición que consta de un test,una persona contesta 45 preguntas y obtiene 183 puntos.Por cada pregunta bien contestada dan 5 puntos y por cada una mal contestada quitan 2 puntos.¿Cuántas contesto bien y cuántas mal?</h2>
<form>
Preguntas <input placeholder="Preguntas" 
	value="45" id="Preguntas" name="Preguntas" onkeyup="calcular3()"/>
Puntos<input placeholder="Puntos"
	value="183"/ id="Puntos" name="Puntos" onkeyup="calcular3()">
<button onclick="calcular3()">Calcular</button>
</form>
<div id="ACERTADAS" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>
<div id="FALLADAS" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular3(){
	Preguntas=document.getElementById('Preguntas').value;
	Puntos=document.getElementById('Puntos').value;
	ACERTADAS=((Puntos+(2*Preguntas))/7);
	document.getElementById('ACERTADAS').innerHTML=ACERTADAS+' ACERTADAS';
}
calcular3();
function calcular3(){
	Preguntas=document.getElementById('Preguntas').value;
	Puntos=document.getElementById('Puntos').value;
	FALLADAS=(((5*Preguntas)-Puntos)/7);
	document.getElementById('FALLADAS').innerHTML=FALLADAS+' FALLADAS';
}
calcular3();

</script>

<?php
if(isset($_GET['Preguntas'])){
	$Preguntas = $_GET['Preguntas'];
	$Puntos = $_GET['Puntos'];
	echo 'ACERTADAS: '.(($Puntos+2*$Preguntas)/7);
}
if(isset($_GET['Preguntas'])){
	$Preguntas = $_GET['Preguntas'];
	$Puntos = $_GET['Puntos'];
	echo 'FALLADAS: '.(((5*$Preguntas)-$Puntos)/7);
}
?>



<h2>Se desea vender un solar rectangular de 12.800 m2 dividiéndolo en tres parcelas rectangulares iguales. 
Si se quieren vallar las lindes de las tres parcelas (los bordes y las separaciones de las parcelas), determina 
las dimensiones del solar para que la longitud de la valla utilizada sea mínima</h2>
<form>
lado x <input placeholder="lado x" 
	value="53.33" id="x" name="lado x" onkeyup="calcular4()"/>
lado y <input placeholder="lado y"
	value="80"/ id="y" name="lado y" onkeyup="calcular4()">
<button onclick="calcular4()">Calcular</button>
</form>
<div id="superficie solar" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular4(){
	x=document.getElementById('x').value;
	y=document.getElementById('y').value;
	superficie solar=(sqrt((2*x*y)/9))*((x*y)/(3*x));
	document.getElementById('superficie solar').innerHTML=superficie solar+' m2';
}
calcular();
</script>

<?php
if(isset($_GET['x'])){
	$x = $_GET['x'];
	$y = $_GET['y'];
	echo 'superficie solar: '.(($sqrt((2*$x*$y)/9))*(($x*$y)/(3*$x)));
}
?>
