<html>
    <head>
       <meta charset="utf-8 sans BOM">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Email :</b></label>
                <input type="text" placeholder="Enter your mail" name="email" required>

                <label><b>Mot de passe :</b></label>
                <input type="password" placeholder="Enter your password" name="password" required>

              
                <a href="form_page.php"> <input type="submit" id='submit' value='LOGIN' ></a>
                
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                
                }
              ?>
               
              <form action="#" method="POST"
                ?>
            </form>
        </div>
    </body>
</html>