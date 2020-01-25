<?php
namespace PlateAPI;
/**
* Plate API Interface
* @author Donald Harper (Dignified Relix)
**/
define( 'ABS_PATH', __DIR__ );

class Autoloader {
  public static function autoload() {
    spl_autoload_extensions(".php");
    spl_autoload_register();
  }
}
Autoloader::autoload();

if( class_exists( 'Log' ) ) {
  if( !isset( $Log ) ) $Log = new Log();
  $Log->post( 'TEST' );
}
?>
