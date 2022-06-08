<?php
    if(is_dir("users")){
        echo "Already Exists";
    }
    else{
        mkdir("users");
        echo "Folder created";
    }

?>