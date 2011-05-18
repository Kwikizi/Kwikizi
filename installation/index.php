<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Installation </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body>

    <div id="header"><h1>Kwikizi</h1></div>
    
    <div id="header_corps">Installation : ÉTAPE 1</div>
    <div id="corps">
        
        
        <h1>Contrôle de la configuration du serveur</h1>
        
        <?php
            
            $errors = FALSE;
        
            if(substr(phpversion(),0,3) >= 5){
                echo '<img src="images/ok.gif" alt="OK - "/> Version de PHP supérieur ou égale à la 5.<br/>';
            } else {
                echo '<img src="images/error.gif" alt="OK - "/> La version de PHP doit être supérieur ou égale à la 5.<br/>';
                $errors = TRUE;
            }
            
            if(extension_loaded('pdo') == TRUE){
                echo '<img src="images/ok.gif" alt="OK - "/> Extension PDO disponible.<br/>';
            } else {
                echo '<img src="images/error.gif" alt="OK - "/> Extension PDO indisponible.<br/>';
                $errors = TRUE;
            }
            
        ?>
        
        <h1>Contrôle de la disponibilité des fichiers</h1>
        
        
        <?php
            if(substr(sprintf('%o', fileperms('../config.php')), -3) == "777"){
                echo '<img src="images/ok.gif" alt="OK - "/> Le fichier <i>config.php</i> est autorisé à l\'écriture.<br/>';
            } else {
                echo '<img src="images/error.gif" alt="OK - "/> Le fichier <i>config.php</i> doit être autorisé à l\'écriture (CHMOD 777).<br/>';
                $errors = TRUE;
            }
        ?>
        
        <br/><br/>
        
        
        <?php
            if($errors == TRUE){
                echo '<center><form action="index.php"><input type="submit" value="Veuillez corriger les erreurs avant de continuer"/></form></center>';
            } else {
                echo '<center><form action="etape2.php"><input type="submit" value="Continuer"/></form></center>';
            }
        ?>
        
        
    </div>
    
</body>
</html>
