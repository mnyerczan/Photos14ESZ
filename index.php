<?php 

    define('APPPATH', 'Application/'); 
   
/**
 * Adatok definiálása
 */
    $page = $_GET['page'];
    $filePath = APPPATH.'Datas/photos.json';

?>
<?php require_once APPPATH.'functions.php' ?>
<?php require_once APPPATH.'Core/add.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Application/Style/style.css" type="text/css">
</head>
<body>
    <?php require_once APPPATH.'Templates/header.html'; ?>
    <?php
    
    switch ( $page )
    {
        case 'photos':  require_once APPPATH.'Core/photos.php'; break;
        case 'form':    require_once APPPATH.'Templates/form.html'; break;      
    }
    ?>
</body>
</html>