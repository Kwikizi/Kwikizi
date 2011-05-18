<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Installation </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body>

    <div id="header"><h1>Kwikizi</h1></div>
    
    <div id="header_corps">Installation : ÉTAPE 2</div>
    <div id="corps">
        
        <?php if(@$_GET['id'] == "1"){ ?>
        <h1 style="text-shadow: 2px 2px 2px #E65962;">Erreur !</h1>
        
        Vous devez remplir tous les champs du formulaire ci-dessous.
        
        <h1>Informations relatives à la base de données</h1>
        <?php } ?>
        
        <?php if(@$_GET['id'] == "2"){ ?>
        <h1 style="text-shadow: 2px 2px 2px #E65962;">Erreur !</h1>
        
        Vérifiez vos informations.<br/>
        Nous n'avons pas réussi à se connecter à la base de données.
        
        <h1>Informations relatives à la base de données</h1>
        <?php } ?>
            
        
        
        <form action="etape3.php" method="POST">
            
            <table>
                
                <tr>
                    <td class="name"><b>Type : </b><br/><div class="slim">Sélectionner le type de base en général MySQL.</div></td>
                    <td>
                        <select name="type">
                            <option value="mysql" selected="selected">MySQL</option>
                            <option value="oci">Oracle</option>
                            <option value="pgsql">PostgreSQL</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="name"><b>Hôte : </b><br/><div class="slim">Si localhost ne marche contacter votre hébergeur.</div></td>
                    <td><input type="text" name="hote" value="localhost"/></td>
                </tr>
                
                <tr>
                    <td class="name"><b>Nom de la base : </b><br/><div class="slim">Nom de la base ou les tables vont s'inscrire.</div></td>
                    <td><input type="text" name="name" value="kwikizi"/></td>
                </tr>
                
                <tr>
                    <td class="name"><b>Utilisateur : </b><br/><div class="slim">Utilisateur correspondant à la base.</div></td>
                    <td><input type="text" name="user" value=""/></td>
                </tr>
                
                <tr>
                    <td class="name"><b>Mot de passe : </b><br/><div class="slim">Mot de passe correspondant à l'utilisateur.</div></td>
                    <td><input type="text" name="mdp" value=""/></td>
                </tr>
                
                <tr>
                    <td class="name"><b>Préfixe des tables : </b><br/><div class="slim">Cela est utile si vous faite plusieurs installation.</div></td>
                    <td><input type="text" name="pref" value="kw_"/></td>
                </tr>
                
            </table>
        
        <br/>
        
        <center><input type="submit" value="Continuer"/></center>
        
        </form>
        
    </div>
    
</body>
</html>
