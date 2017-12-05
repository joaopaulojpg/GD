<?php 

$pasta = "arquivo_exemplo_permissao";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretorio criado";





 ?>