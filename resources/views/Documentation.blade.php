<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Finance SOS</title>
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper" >

        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar" style="color: #009fe1;">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">SOS Villages d'enfants</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Historique</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Les importations du:</h6>
                        <a class="collapse-item" href="buttons.html">08/05/2023</a>
                        <a class="collapse-item" href="cards.html">08/05/2022</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Documentation</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Theme:</h6>
                        <a id="use" class="collapse-item" href="utilities-color.html">Utilisation</a>
                        <a class="collapse-item" href="utilities-border.html">Precautions</a>
                    </div>
                </div>
            </li>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">@if (Auth::check())
    <p> {{ Auth::user()->email }}</p>
@endif
</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                    
                    <p>Cette application permet d'importer un fichier excel comportant des données qui permettront de générer les rapports des états des activités financières. Vous aurez ici tout les détails sur l'utilisation de l'application.</p>
                    <h1 style="text-align:center"> <span style="color:black;"><u><b>Utilisation</b></u></span></h1>
                    <h2> <span style="color:black;"> A) Authentification et autorisation</span></h2>
                    <p>- Avant toute connexion, vous devrez disposer d'une adresse e-mail et d'un mot de passe déjà enregistrés. Le responsable des TICs vous aidera à en créer un;</p>
                    <p>- Sur la page de connexion, veuillez entrer l'adresse e-mail et le mot de passe pour vous connecter;</p>
                    <p>- Pour ajouter ou supprimer un Utilisateur vous devez vous rapprocher du Manager des Tics.</p>
                    <br>
                    <h2> <span style="color:black;">B) Fonctionnalités pricipales</span></h2>
                    <br>
                    <h4> <span style="color:black;">1- Importation de fichiers</span></h4>
                    <p>- Une fois connectée vous verrez la page d'importation où vous pourrez télécharger le modèle du fichier à importer;</p>
                    <p>- Pour importer le fichier excel appuyez sur le boutton <b>Choisir un fichier</b> pour un fichier respectant la forme du modèle et appuyez ensuite sur <b>Envoyer le fichier;</b></p>
                    <p>- Une fois votre fichier importé, vous appuyez sur <b>Générer les rapports</b> en haut à droite pour générer les différents rapports;</p>
                    <p>- Le boutton <b>Supprimer les données</b> vous permettra de supprimer les données que vous avez importées de la base de données.</p>
                    <img src="{{ asset ('Images\page_importation.png')}}" class="img-fluid" alt="capture d'écran de la page d'importation">
                    <br><br>
                    <h4> <span style="color:black;">2- Générations des rapports </span></h4>
                    <p>- Vous devez en premier lieu remplir les imformations sur les rapports(Structure, Année, Signataire) et ensuite cliquer sur le boutton <b>Enregistrer et voir les rapports</b>;</p>
                    <img src="{{ asset ('Images\Informations_rapports.png')}}" class="img-fluid" alt="capture d'écran du formulaire permettant de remplir les informations">
                    
                    <br><br>
                    <p>- Après l'importation des fichiers, l'application récupère les données et effectue des calculs necessaires avec des formules bien précises afin d'obtenir les différents rapports</p>
                    <p>- Vous verrez alors les différents rapports que vous pouvez consulter. Les rapports disponibles sont: Bilan, Notes-Bilan, Etat des activités financières, Notes-EAF, Fonds restreints, Etat Flux de Trésorerie.</p>
                    <img src="{{ asset ('Images\différents_rapports.png')}}" class="img-fluid" alt="capture d'écran de la page d'importation">
                    <br>
                    <br>
                    <h4> <span style="color:black;">3- Téléchargement des rapports </span></h4>
                    <p>- Sur la page de chaque rapports vous verrez en haut, à gauche, deux bouttons qui vous permettent de télécharger les rapports soit en format excel, soit en format pdf</p>
                    <img src="{{ asset ('Images\Téléchargement_rapports.png')}}" class="img-fluid" alt="capture d'écran de la page d'importation">
                    <br>
                    <br>
                    <h1 style="text-align:center"> <span style="color:black;"<u><b>Sécurité</b></u></span></h1>
                    <h2> <span style="color:black;">A) Bonnes pratiques de sécurité</span></h2>
                    <p>- Pour des questions de sécurité, seul le Manager des TICs peut créer un nouvel utilisateur;</p>
                    <p>- Ne ppartagez pas vos identifiants avec d'autres personnes</p>
                    <p>- Lorsque vous nêtes pas en cours d'utilisation veuillez fermer votre section</p>
                    <h2> <span style="color:black;">B) Politiques de confidentialité</span></h2>
                    <p>- Votre mot de passe est crypté grâce à un système de achage de laravel avant que vos données ne soient enregistrées dans notre base de données</p>
                    <p>- Toutes les données que vous entrerez dans cette application seront correctement protégées</p>

                    <!--div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                       <a href="{{route('bilan')}}"> <div class="alert alert-primary" role="alert">
                          Bilan
                        </div></a>
                      <a href="{{route('etatfinance')}}">  <div class="alert alert-secondary" role="alert">
                          Etat des Activites Financieres
                        </div></a>
                        <a href="{{route('fonds')}}"><div class="alert alert-success" role="alert">
                          Fonds restreints
                        </div></a>
                        <a href="{{route('noteseaf')}}"><div class="alert alert-danger" role="alert">
                          Notes EAF
                        </div></a>
                        <a href="{{route('notesbilan')}}"><div class="alert alert-warning" role="alert">
                          Notes Bilan
                        </div></a>
                        <a href="{{route('etatflux')}}"><div class="alert alert-info" role="alert">
                         Etat flux de tresorerie
                        </div></a-->

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SOS Villages d'Enfants 2024</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment vous déconnecter?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selectionnez "Déconnexion" si vous voulez quitter la session.</div>
                <div class="modal-footer">
                    
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>

                    @auth
    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-danger" type="submit">Déconnexion</button>
    </form>
@endauth

                    
                    
                </div>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>