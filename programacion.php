<h1>
Ley de Ohm
</h1>
<form>
V<input placeholder="voltaje" value="20"  name ="v" id="v" onkeyup="calcular()"/>
R<input placeholder="resistencia" value="1" name ="r" id="r" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular</button>
</form>
<div id="i" style="padding:20px; background-color:pink"> Resultado</div>
<script>
function calcular(){
v=document.getElementById("v").value;
r=document.getElementById("r").value;
i=v/r;
document.getElementById("i").innerHTML= i+" Amperios";
}
calcular();
</script>

<?php

if(isset($_GET))print_r($_GET);

?>