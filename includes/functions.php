<?php

class folder{
    
    function testFolderConfigInstall(){
    
        $file=fopen("config.php",'r');
        $test = fgets($file);
        if ($test == ""){ header('Location: installation/'); }
        fclose($file);
    
    } 
    
}

?>