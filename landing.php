<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/458282888a.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
  <body>
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>

    <div class="navbar">
        <div class="container">
            <!-- <i class="fa-brands fa-optin-monster"></i> -->
            <img src="img/monster.png" alt="" width="60px">
            <a href="#accueil">Home</a>
            <a href="#bienvenue">Who are we?</a>
            <a href="#jeux">Our games</a>
            <a href="deconnexion.php" class="btn btn-danger btn-lg">Logout</a>
        </div>
    </div>
    <section class="sec1" id="accueil">
        <div class="container">
            <div class="left">
                <h1>GameDay, <br> Welcome <?php echo $data['pseudo']; ?> !</h1>
                <p>
                    Here is our new website and we are very happy to see you with us.
                    <br> You can play some fantastic game for free.
                    Try to beat your score and become the BEST on GameDay ! 
                    <br> 
                </p>
                <a href="#jeux">
                    <button>Play</button>
                </a>
            </div>
            <div class="right">
                <img src="img/zombie.png" alt="" width="300px">
            </div>
        </div>
    </section>
    <div class="ancre" id="bienvenue" style="position: relative; top: -100px;"></div>
    <section class="sec2" id="bienvenue">
        <div class="container">
            <div class="big-card">
                <div class="left">
                    <img src="img/cartoon.png" alt="" width="100%">
                </div>
                <div class="right">
                    <h4>Welcome on</h4>
                    <h1>GameDay</h1>
                    <p>
                    Our site offers several games: menja, snake, ... Register for free, participate in a ranking with all other players already registered and save your progress to try to beat your best score! 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec3">
        <img src="svg/pique-down.svg" alt="">
    </section>
    <div class="ancre" id="jeux" style="position: relative; top: -100px;"></div>
    <section class="sec4">
        <div class="center">
            <div class="title">
                <h1>Time</h1>
                <h4>to play</h4>
            </div>
        </div>
        <div class="container">
            <div class="card"><a href="./MENJA/menja.html" class="game-link">
                <div class="shape shape__big"></div>
                <div class="shape shape__small"></div>
                <img src="img/ninja.png" class="ninja" alt="" width="130px">
                <div class="top">
                    
                </div>
                <div class="bottom">
                    <h4>MENJA</h4>
                    <h1>Game</h1>
                    <div class="description">
                        <p>
                        Impress your sensei in Menja. Show him your skills and cut up dozens of cubes <br> in this game!
                        Draw your sword and cut up lots of cubes of all colours in mid-air 
                        </p>
                    </div>
                </div>
            </a></div>
            <div class="card"><a href="./SNAKE/snake.html" class="game-link">
                <div class="shape shape__big"></div>
                <div class="shape shape__small"></div>
                <img src="img/snake.png" class="snake" alt="" width="200px">
                <div class="top">
                    
                </div>
                <div class="bottom">
                    <h4>Crazy</h4>
                    <h1>Snake</h1>
                    <div class="description">
                        <p>
                        You've all played it at least once, or you never really owned a mobile phone in <br> the early 2000s. 
                        Snake is not, strictly speaking, a single game.
                        </p>
                    </div>
                </div>
            </a></div>
            <div class="card"><a href="./TOWER/tower.html" class="game-link">
                <div class="shape shape__big"></div>
                <div class="shape shape__small"></div>
                <img src="img/gangster.png" class="gangster" alt="" width="200px">
                <div class="top">
                </div>
                <div class="bottom">
                    <h4>Domino</h4>
                    <h1>Mafia</h1>
                    <div class="description">
                        <p>
                        A mini shooter set in a 1920s mafia <br> world. 
                        Be very reactive to eliminate them all and get out safely.
                        </p>
                    </div>
                </div>
            </a></div>
        </div>
    </section>
    <footer>
    <div class="container">
            <div class="left">
                <h1>menu</h1>
                <a class="select" href="#accueil">Home</a>
                <a class="select" href="#bienvenue">Who are we?</a>
                <a class="select" href="#jeux">Our games</a>
                <a class="select" >Login</a>
            </div>
            <div class="right">
                <h1>About Us</h1>
                <p>                            
                We are a group of four students in our third year of engineering school. As part of a technical programming project, we decided to create this site to play a multitude of games.
                </p>
            </div>
        </div>
    <div class="social">
        <ul>
            <li style="--clr:#1877f2;">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li style="--clr:#c32aa2;">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li style="--clr:#1da1f2;">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li style="--clr:#25d366;">
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </li>
        </ul>
    </div>                  
    </footer>
  </body>
</html>