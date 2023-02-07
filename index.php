<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehdi Web developpeur</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="description" content="Bienvenue sur mon Portfolio, je suis Mehdi Douib, web developpeur en apprentissage chez La Plateforme_ à Marseille.">
</head>
<body>
    <header class="d-flex m-0 align-items-center">
        <a class="titreblanc text-decoration-none" href="#">Infos</a>
        <a class="titreblanc text-decoration-none" href="#projet">Projets</a>
        <a class="titreblanc text-decoration-none" href="#competence">Compétences</a>
    </header>
    <div class="bgdarkun">
        <div class="d-flex  align-items-center">
            <div class="col-6 d-flex justify-content-center head">
                <div class="avatar"></div>
            </div>
            <div class="col-6 head ">
                <h1 class="titreblanc">Douib mehdi</h1>
                <p class="textblanc"> Développeur web junior, <br>Etudiant à La Plateforme_ sur Marseille, <br>Cherche alternance pour Mars 2023</p>
            </div>
        </div>
        <div class="d-flex justify-content-end cadre">
            <span class="col-10 titrenom text-end"></span>
            <span class="col-2"></span>
        </div>
        <div class="coupure m-0 p-0">
            <p class="text-center titreblanc">Clique pour avoir mes infos</p>
        </div>
    </div>
    <div class="d-flex">
        <div class="col-4 cartedeux">
            <a class="d-flex flex-column align-items-center text-decoration-none " target='_blank' href="">
                <span class="titre">Mon CV</span>
                <img class="logo lien" src="public/images/cv.png" alt="downloadcv">
            </a>
        </div>
        <div class="col-4 cartetrois">
            <a class=" d-flex flex-column align-items-center text-decoration-none " target='_blank' href="https://github.com/mehdi-douib">
                <span class="titre ">GitHub</span>
                <img class="logo lien" src="public/images/github.png" alt="liengithub">
            </a>
        </div>
        <div class="col-4 cartequatre">
            <a class=" d-flex flex-column align-items-center text-decoration-none " target='_blank' href="https://www.linkedin.com/in/mehdi-douib-a000a825a/">
                <span class="titre ">Linkedin</span>
                <img class="logo lien" src="public/images/linkedin.png" alt="lienlinkedin">
            </a>
        </div>
    </div>
    <div class="bgdark">
        <div id="projet"></div>
        <div class="coupuredeux m-0 ">
        </div>
        <div class="cadre">
            <div class="d-flex flex-column  align-items-center justify-content-between titreblanc mb-5">
                <span class="titreblanc">Mes projets</span>
                <div class="d-flex flex-column align-items-center ">
                    <a class="carteprojet text-decoration-none titre d-flex flex-column  align-items-center mt-5" type="button" data-toggle="modal" data-target="#boutique">
                        <span class="titre"> ville de Marseille  </span>
                        <img class='imageprojet' src="public/images/ville de marseille.png" alt="projet villedeMarseille">
                        <a href="https://mehdi-douib.students-laplateforme.io/site%20Marseille/marseille1.html" target="_blank"><img src="images/icons8-salle-de-réunion-100.png" alt=" ville de Marseille"></a>          
                    </a>
                    <a class="carteprojet text-decoration-none titre d-flex flex-column  align-items-center mt-5" type="button" data-toggle="modal" data-target="#connexion">
                        <span class="titre"> module de connexion </span>
                        <img class='imageprojet' src="public/images/module de connexion.png" alt="projet connexion">
                        <a href="https://mehdi-douib.students-laplateforme.io/moduleconnexion/index.php" target="_blank"><img src="images/icons8-connexion-au-compte-100.png" alt="moduleconnexion"></a> 
                    </a>
                    <a class=" carteprojet text-decoration-none titre d-flex flex-column  align-items-center mt-5" type="button" data-toggle="modal" data-target="#erreur">
                        <span class="titre">reservation de salles </span>
                        <img class='imageprojet' src="public/images/reservation.png" alt="projet reservation de salles">
                        <a href="https://mehdi-douib.students-laplateforme.io/reservationsalles/index.php" target="_blank"><img src="images/icons8-salle-de-réunion-100.png" alt="reservation salles"></a>          
                    </a>
                    <a class=" carteprojet text-decoration-none titre d-flex flex-column  align-items-center mt-5" type="button" data-toggle="modal" data-target="#fansite">
                        <span class="titre"> memory </span>
                        <img class='imageprojet' src="public/images/memory.png" alt="projet memory">
                        <a href="https://mehdi-douib.students-laplateforme.io/memory/index.php" target="_blank"><img src="images/icons8-game-controller-96.png" alt="memory"></a>          
              </div>
                    </a>
                    
                    <div class="m-5" id="competence"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cartecompetence d-flex flex-column  align-items-center mt-5">
        <span class="titreblanc m-5"> Compétences</span>
        <div class="d-flex competence">
            <div class="card">
                <img class="card-img-top" src="public/images/php.png" alt="phpimg">
                <div class="card-body">
                    <h5 class="card-title titreblanc">PHP</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="public/images/javascript.png" alt="javascriptimg">
                <div class="card-body">
                    <h5 class="card-title titreblanc">Javascript</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="public/images/html.png" alt="htmlimg">
                <div class="card-body">
                    <h5 class="card-title titreblanc">HTML</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="public/images/css.png" alt="cssimg">
                <div class="card-body">
                    <h5 class="card-title titreblanc">CSS</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="public/images/mysql.png" alt="mysqlimg">
                <div class="card-body">
                    <h5 class="card-title titreblanc">Mysqli</h5>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    <footer class="d-flex align-items-center mt-5">
        <div class="col-7 mt-5">
            <a class="d-flex flex-column align-items-center text-decoration-none" target='_blank' href="mailto:mehdi.douib@laplateforme.io">
                <span class="titre footercontact">Contactez moi par mail !</span>
                <img class="logo m-4" src="public/images/email.png" alt="lienemail">
            </a>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal memory-->
        <div class="modal" id="fansite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header m-4">
                        <h5 class="modal-title titre" id="exampleModalLabel">memory</h5>
                    </div>
                    <div class="modal-body textproj m-2">
                    creer le jeux du memory
                    </div>
                    <div class="modal-footer m-4">
                        <button type="button" class="btn" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal >reservastion de salles-->
        <div class="modal" id="erreur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header  m-4">
                        <h5 class="modal-title titre" id="exampleModalLabel">reservastion de salles</h5>
                        
                    </div>
                    <div class="modal-body textproj m-2">
                    creer un page web permaiten de reserve des salle en html php mysql
                    </div>
                    <div class="modal-footer m-4">
                        <button type="button" class="btn" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal ville de marseille-->
        <div class="modal" id="boutique" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content ">
                    <div class="modal-header m-4">
                        <h5 class="modal-title titre " id="exampleModalLabel">Ville de Marseille</h5>
                    </div>
                    <div class="modal-body textproj m-2">
                    Faire  sitesur la ville de Marseille avec navigation, une page contact, etc en html/css
                    </div>
                    <div class="modal-footer m-4">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- module Connexion-->
        <div class="modal" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header m-4">
                        <h5 class="modal-title titre" id="exampleModalLabel">module Connexion</h5>
                    </div>
                    Faire un formulaire de  connexion pour c conecté a une basse de donne en php/mysql
                    <div class="modal-body textproj m-2">
                        
                    </div>
                    <div class="modal-footer m-4">
                        <button type="button" class="btn" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>