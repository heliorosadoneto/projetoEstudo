<?php
namespace App\Model;

class Conect
 {
    private static $instance;
    public static function getConn()
 {
        if ( !isset( self::$instance ) ):
        self::$instance = new \PDO( 'mysql:dbname=bancoxl;host=localhost', 'root', '' );
        echo 'Conectado';
        endif;
        return self::$instance;
    }

}

?>
