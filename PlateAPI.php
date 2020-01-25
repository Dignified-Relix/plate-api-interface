<?php
namespace PlateAPI;
/**
* Plate API Interface
* @author Donald Harper (Dignified Relix)
**/

class Autoloader {
  public static function autoload() {
    spl_autoload_extensions(".php");
    spl_autoload_register();
  }
}
Autoloader::autoload();

?>
