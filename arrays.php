<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2">
</head>
<center><h1><u>Ejercicio 1</u></h1></center>
<center><h2><i>Almacena en un array la tabla de multiplicar del 6 y muestra el contenido del array</i></h2></center>
<pre>
<?php
//tabla del 6
$tabla = [
	'0',
	'6',
	'12',
	'18',
	'24',
	'30',
	'36',
	'42',
	'48',
	'54',
	'60',
];
?>
<?php
$tabla=[];
for($i=0; $i <100; $i++){ 
$tabla[]=6*$i;
}
print_r ($tabla);
?>
<div  id="i"></div>
</pre>

<script>
tabla=[];
for(i = 0;i<=100;i++){
	tabla[i]=6*i;
} console.log(tabla);
//document.getElementById('i').innerHTML =tabla[i];
txt='';
for(i in tabla)
txt+='6x'+ i+ ' = '+ tabla[i] + '<br/>';
document.getElementById('i').innerHTML =txt;
</script>

<h1><center><u>Ejercicio 2</u></center></h1>
<h3><center><i>Crea un desplegable con los nombres de tus compañeros y, como resultado de la selección, obtendrás en qué puesto se sienta:</i></center></h3>
<center>
	<?php
		if(!isset($_GET["nombres"]))
			$_GET["nombres"]=1;
		$nombres =["Andrei",
					"Fabi",
					"Héctor",
					"Gabi",
					"Nury",
					"Agus",
					"Macias",
					"Dani",
					"Isma",
					"Jose",
					"Sañudo",
					"Rodras",
					"Alvaro",
					"Fonso",
					"Darius",
					"Ivi",
					"Teje"];
		$puesto =["1",
					"2",
					"3",
					"4",
					"5",
					"6",
					"7",
					"8",
					"9",
					"10",
					"11",
					"12",
					"13",
					"14",
					"15",
					"16",
					"17"];
	?>
	<form>
		<button style="background:purple">Escoger</button>
		<select name="nombres">
		<?php
			foreach ($nombres as $i=>$n)
			echo '<option value="'.$puesto[$i].'" '
			.($_GET['nombres']==$puesto[$i]?'selected':'')
			.'>'
			.$n
			.'</option>';
		?>
		</select>
	</form>
		<?php
			echo $_GET['nombres'];
		?>
		<body onLoad="document.form.nombres.value='<?=$_POST['nombres']?>'">
</center>

<h1><center><u>Ejercicio 3</u></center></h1>
<h3><center><i>Ordena alfabeticamente a tus compañeros por su nombre de pila y muestra al que ocupe el quinto lugar en la lista.</i></center></h3>
<center>
<?php
$nombres = array("Andrei",
					"Fabi",
					"Héctor",
					"Gabi",
					"Nury",
					"Agus",
					"Mathew",
					"Dani",
					"Isma",
					"Pepe",
					"Sañudo",
					"Rodras",
					"Tresgo",
					"Fonso",
					"Darius",
					"Ivi",
					"Teje");
//Ordenados alfabeticamente
sort($nombres);
echo $nombres[5-1];
?>
</center>
</br>

<div style="text-align:center" id="r"></div>
<script>
	nombres =["Andrei",
				"Fabi",
				"Héctor",
				"Gabi",
				"Nury",
				"Agus",
				"Mathew",
				"Dani",
				"Isma",
				"Pepe",
				"Sañudo",
				"Rodras",
				"Tresgo",
				"Fonso",
				"Darius",
				"Ivi",
				"Teje",];
			nombres.sort();
			document.getElementById('r').innerHTML =nombres[5-1];
</script>
</br>