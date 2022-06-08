<?php
    $fo=fopen("notes.txt","r");
    echo fgets($fo)."<br/>";
    echo fgetc($fo)."<br/>";
    echo fread($fo,filesize("notes.txt"));

?>