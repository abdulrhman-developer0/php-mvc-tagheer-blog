<?php

if (isset($_GET['f'])):

    $file = $_GET['f'];

    $zip = new ZipArchive;

    if ( $zip->open(__DIR__.DIRECTORY_SEPARATOR.$file) == true ) {
        $zip->extractTo('zips'.DIRECTORY_SEPARATOR.explode('.',$file)[0].DIRECTORY_SEPARATOR);
        $zip->close();
        echo '<h1>Done</h1>';
    }else{
        echo '<h1>Error</h1>';
    }

ELSE:

    $files = scandir(__DIR__);
    foreach ($files as $file):
        echo '<a href="'.$_SERVER['PHP_SELF'].'?f='.$file.'">'.$file.'</a><br/>';
    endforeach;

endif;
