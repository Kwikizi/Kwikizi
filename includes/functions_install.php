<?php

class install{
    
    function testFolderConfigInstall(){
    
        $file=fopen("config.php",'r');
        $test = fgets($file);
        if ($test == ""){ header('Location: installation/'); }
        fclose($file);
    
    } 
    
    function writeInConfig($type,$hote,$name,$user,$mdp,$pref){
    
        $monfichier = fopen('../config.php', 'r+');
        ftruncate($monfichier,0);
        fseek($monfichier, 0);
        fputs($monfichier,
'<?php 
    
    define("DB_TYPE", "'.$type.'");
    define("DB_HOTE", "'.$hote.'");
    define("DB_NAME", "'.$name.'");
    define("DB_USER", "'.$user.'");
    define("DB_MDP", "'.$mdp.'");
    define("DB_PREF", "'.$pref.'");
    
?>');
        fclose($monfichier);
    
    } 
    
}

?>