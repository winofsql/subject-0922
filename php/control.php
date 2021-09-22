<?php
$pv = explode( ".", phpversion() );
if( $pv[0]+0 >= 8 ) {
    error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING );
}
else {
    error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );
}
session_cache_limiter('nocache');
session_start();
mb_language( 'Japanese' );
mb_internal_encoding( 'UTF-8' );
header( "Content-Type: text/html; charset=utf-8" );

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lightbox";
$connect_string = "mysql:host={$host};dbname={$dbname}";

require_once("model.php");

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
    get_table();
}

require_once("view.php");
?>