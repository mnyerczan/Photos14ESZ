<?php 
/** 
 * Két függvény, a fájl írására és olvasására. Lehet használni 
 * magas szintű fájkezelő függvényeket.
 */
    function getContents( $filePath )
    {        
        return json_decode( file_get_contents( $filePath ), TRUE );
    }

    function putContent( $filePath, array $photos)
    {   
        if( file_put_contents( $filePath, json_encode( $photos ) ))
        {
            return TRUE;
        }
        return FALSE;
    }