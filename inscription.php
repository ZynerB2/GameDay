<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Inscription</title>
        </head>
        <body>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <img src="img/monster.png" alt="" width="60px"><h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
            </form>
            <p class="text-center"><a href="index.php">Déjà inscrit ? Connecte-toi</a></p>

            <!-- OMBRES -->

            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
            <div class="drop drop-5"></div>
            <div class="drop drop-6"></div>
            <div class="drop drop-7"></div>
        </div>
        <style>
            *{
                margin: 0;
                padding: 0;
                outline: none;
            }

            body{
                background: #1d1e31;
                height: 100vh;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                font-family: arial, sans-serif;
            }

            .container{
                position: relative;
            }

            form{
                background-color: #353448,;
                padding: 3rem;
                height: 480px;
                border-radius: 20px;
                box-shadow: 0px 0px 30px 3px rgb(63, 192, 172);
                text-align: center;
            }

            h2{
                color: white;
                font-weight: 500;
                opacity: .7;
                font-size: 1.5rem;
                margin-bottom: 30px;
                text-shadow: 2px 2px 4px rgba(255, 255, 255, .3)
            }

            a{
               color: #ddd;
               text-decoration: none;
               font-size: 16px; 
            }

            a:hover {
                color: rgb(63, 192, 172);
                text-decoration: none;
            }

            .form-group input{
                background: transparent;
                padding: 1rem;
                width: 200px;
                border-radius: 50px;
            }

            button{
                cursor: pointer;
                color: rgb(63, 192, 172);

            }

            .drop{
                background: rgb(63, 192, 172, .3);
                position: absolute;
                border-radius:10px;
                box-shadow: 0px 0px 60px 8px rgb(63, 192, 172);

            }

            .drop-1{
                height:80px;
                width: 80px;
                top: 70px;
                left: 200px;
                z-index: -1
            }

            .drop-2{
                height:80px;
                width: 80px;
                bottom: 110px;
                right: 250px;
                z-index: -1
            } 

            .drop-3{
                height:100px;
                width: 100px;
                bottom: 260px;
                right: 190px;
                z-index: -1
            } 

            .drop-4{
                height:120px;
                width: 120px;
                top: 50px;
                right: 175px;
            } 

            .drop-5{
                height:60px;
                width: 60px;
                bottom: 420px;
                right: 375px;
                z-index: -1
            } 

            .drop-6{
                height:100px;
                width: 100px;
                bottom: 260px;
                left: 190px;
                z-index: -1
            } 

            .drop-7{
                height:60px;
                width: 60px;
                bottom: 420px;
                left: 375px;
                z-index: -1
            } 

            .login-form p {
                margin-top: 1.2rem;
            }


/* RESPONSIVE FORMS */

    @media (max-width: 1200px){
    .drop-5{
        display: none;
    }
    .drop-6{
        display: none;
    }
    .drop-7{
        display: none;
    }
    .drop-1{
                top: 120px;
                left: 200px;
                z-index: -1
            }

            .drop-2{
                height:80px;
                width: 80px;
                bottom: 110px;
                left: 200px;
                z-index: -1
            } 

            .drop-3{
                height:100px;
                width: 100px;
                bottom: 260px;
                right: 150px;
                z-index: -1
            } 

            .drop-4{
                top: 100px;
                right: 175px;
            } 
}

    @media (max-width: 750px){
    .drop-4{
        display: none;
    }
    .drop-1{
                top: 75px;
                left: 50px;
                z-index: -1
            }

            .drop-2{
                bottom: 65px;
                left: 50px;
                z-index: -1
            } 

            .drop-3{
                height:60px;
                width: 60px;
                bottom: 260px;
                right: 40px;
                z-index: -1
            } 
}
        </style>
        </body>
</html>