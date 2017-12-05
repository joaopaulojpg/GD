<?php 

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

echo "<pre>";

$comando = system("dir C:", $retorno);

echo "</pre>";

}

 ?>
 <form method="POST">
 	
 	<input type="text" name="cmd">
 	<button>Enviar</button>
 </form>