<?php

    require "../includes/functions_install.php";
    $install = new install();


    if(isset($_POST)){ extract($_POST); } else { header('Location: etape2.php?id=1'); }
    if($hote != "" && $name != "" && $user != ""){
        
        try{
            
            $DB = new PDO(''.$type.':host='.$hote.';dbname='.$name.'',$user,$mdp);
            $install->writeInConfig($type,$hote,$name,$user,$mdp,$pref);
            
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
    <script type="text/javascript" src="password_meter.js"></script>
</head>
<body>

    <div id="header"><h1>Kwikizi</h1></div>
    
    <div id="header_corps">Installation : ÉTAPE 3</div>
    <div id="corps">
        
        
        <h1>Informations relatives à votre site</h1>
        
        
        <form action="etape3.php" method="POST">
            
            <table>
                
                <tr>
                    <td class="name"><b>Titre : </b><br/><div class="slim">Si localhost ne marche contacter votre hébergeur.</div></td>
                    <td><input type="text" name="titre" value="localhost"/></td>
                </tr>
                
                <tr>
                    <td class="name"><b>Pseudo : </b><br/><div class="slim">Il s'agit du pseudo de l'administrateur.</div></td>
                    <td><input type="text" name="name" value="wordpress"/></td>
                </tr>
                
                <tr>
                    <td class="name"><b>Mot de passe : </b><br/><div class="slim">Il s'agit du mot de passe de l'administrateur.</div></td>
                    <td><input type="password" name="user" value="" onkeyup="passwordStrength(this.value)"/>
                    <p><span id="passwordDescription">Très faible</span><div id="passwordStrength" class="strength0"></div></p></td>
                </tr>
                
            </table>
        
        <br/>
        
        <center><input type="submit" value="Continuer"/></center>
        
        </form>
        
        
        
    </div>
    
</body>
</html>
