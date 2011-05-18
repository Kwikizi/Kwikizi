<?php

    require "../includes/functions_install.php";
    $install = new install();


    if(isset($_POST)){ extract($_POST); } else { header('Location: etape2.php?id=1'); }
    if($hote != "" && $name != "" && $user != ""){
        
        try{
            
            $DB = new PDO(''.$type.':host='.$hote.';dbname='.$name.'',$user,$mdp);
            $install->writeInConfig($type,$hote,$name,$user,$mdp);
            
        } catch(Exception $e) {
            
            header('Location: etape2.php?id=2');
            
        }} else {
            header('Location: etape2.php?id=1');
        }
    
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Installation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body>

    <div id="header"><h1>Kwikizi</h1></div>
    
    <div id="header_corps">Installation : ÉTAPE 3</div>
    <div id="corps">
        
        
        <h1>Informations relatives à la base de données</h1>
        
        
        
    </div>
    
</body>
</html>
