<?php
namespace PlateAPI;

// Do not allow loading directly
if( !defined( 'ABS_PATH' ) ) exit();

class Log {

  const LOG_PATH = '/logs/';
  const LOG_FILENAME_FORMAT = 'Y_m_d__';
  const LOG_ENTRY_TIMESTAMP_FORMAT = 'h:i:s A - ';

  function __construct() {

  }

  private function get_file() {
    $filename = sprintf( "%s%s%s.txt",
      ABS_PATH,
      self::LOG_PATH,
      date( self::LOG_FILENAME_FORMAT, time() )
    );

    $handle = fopen( $filename, 'w' );

    if( $handle !== false ) return $handle;

    return;
  }

  private function close_file( $handle ) {
    return fclose( $handle );
  }
  public function post( $msg ) {

    $handle = $this->get_file();

    if( $handle ) {
      fwrite( $handle, date( self::LOG_ENTRY_TIMESTAMP_FORMAT, time() ) . $msg );
      $this->close_file( $handle );
    }

  }


}

?>
