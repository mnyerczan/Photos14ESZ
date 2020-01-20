<?php
/**
 * GET DATAS FROM JSON FILE
 */
    $photos = getContents( $filePath );        
?>


<main class="main">
    <?php foreach ( $photos as $photo ): ?>
        <img src="<?= $photo['thumbnail'] ?>" title="<?= $photo['title'] ?>">
    <?php endforeach; ?>
</main>