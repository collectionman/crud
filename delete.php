<?php
    include( "db.php" ) ;
    
    if ( isset( $_GET[ 'id' ] ) ) {
        $id = $_GET[ 'id' ] ;
        $query = "DELETE FROM task WHERE id = $id" ;

        mysqli_query( $dbconnection, $query ) ;

        $_SESSION[ 'message' ] = 'Task Removed Successfully' ;
        $_SESSION[ 'message_type' ] = 'info' ;

        header( "Location: index.php" ) ;
    }
?>