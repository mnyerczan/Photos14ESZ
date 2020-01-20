<?php
    $photo = $_POST;

    if ( @$photo['submit'] )
    {
        /**
         * GET ASSOCIATIVE ARRAY OF PHOTOS
         */
        $photos = getContents( $filePath );

        /**
         * ADD NEW PHOTO TO PHOTOS
         */
        $photos[] = $photo;

    
        if( putContent( $filePath, $photos ) )
        {
            header('Location: index.php?page=photos');
        }
        else
        {
            header('Location: index.php?page=form&error=1');
        }
    }