<?php 

require_once ("vendor/autoload.php");

// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );

Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

$tpl = new Tpl;

$tpl->assign( "name", "JP" );
$tpl->assign( "version", PHP_VERSION );

//vai gerar o template, com base todos os dados anteriormente
$tpl->draw( "index" );


 ?>