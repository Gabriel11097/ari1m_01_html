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
