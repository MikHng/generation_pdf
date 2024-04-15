<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Import donnee</title>
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top"  data-spy="scroll"  data-target="#navbarko">
 
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
                        <a class="collapse-item" href="utilities-color.html">Securite</a>
                        <a class="collapse-item" href="utilities-border.html">Precautions</a>
                        <a class="collapse-item" href="utilities-animation.html">Mode de fonctionnement</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
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
                                    Se déconnecter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                        
                        <!-- a href="http://127.0.0.1:8002" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Générer les Pdfs</a-->

                                <!-- Button trigger modal -->
<button type="button" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-download fa-sm text-white-50"></i>Générer les rapports
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informations sur les rapports</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom_structure">Nom de la structure</label>
            <input type="text" name="nomstructure" class="form-control" id="nomstructure" aria-describedby="nomstructure" placeholder="Entez le nom de la structure" value="SOS Villages d'Enfants BENIN">
        
        </div>

        <div class="form-group">
            <label for="annee">Annee</label>
            <input type="number" name="annee" min="1900" max="2100" step="1" class="form-control" value="{{ now()->year }}" id="annee" aria-describedby="annee" placeholder="Entez l'annee">
        
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nom du Directeur des Finances et Controle</label>
            <input type="text" class="form-control" id="nomdfc" name="nomdfc" aria-describedby="nomdfc" placeholder="Entez du Directeur des Finances et controle" value="Diene ALIOUNE">
        
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nom du Directeur Internationnal Region</label>
            <input type="text" class="form-control" id="nomdir" name="nomdir" aria-describedby="nomdir" placeholder="Entez le Nom du Directeur Internationnal Region" value="Benoît Piot">
        
        </div>
 
        @php
    $i = 0;
@endphp

@forelse ($students as $student)
    @if ($loop->first)
        <button type="submit" class="btn btn-primary">Enregistrer et voir les rapports</button>
    @endif

    @empty
    <boutton class="btn btn-danger">Veillez importer le fichier Excel</boutton>
@endforelse

        </form>
       

  
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
                        






                    </div>
<br>
       <table border="8" style="margin-top:2em;" class="table table-striped table-hover">
       <div>
            @if($errors->any())
                <h5 class="alert alert-danger" role="alert">Les erreurs suivantes existent dans votre fichier Excel. Veuillez les corriger. Voir la <a href="{{ route('documentation') }}">documentation</a>.</h5>
                <ol>
                    @foreach($errors->all() as $error )

                    <li class="alert alert-danger" role="alert">{{$error}}</li>

                    @endforeach
                </ol>
            @endif

        </div>

       
<h3 style="text-align:center">Importez votre fichier excel contenant les informations suivant <a href="{{ asset('Model.xlsx') }}" style="text-decoration:none; color:blue;"> ce modèle</a>!</h3>
<br>
            <form action="/import" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control form-control-lg" type="file" name="student_file" id="" accept=".xlsx,.xls,.csv" required>
                <br>
                <div >
                <a href="{{ asset('Model.xlsx') }}" type="button" class="btn btn-primary" data-bs-dismiss="modal">Télécharger le modèle</a>
                <input type="submit" class="btn btn-success" value="Envoyer le fichier excel">
                <a type="button" href="{{ route('destroy') }}" class="btn btn-danger shadow-sm" ><i></i>Supprimer les donnees</a>
                </div>
            </form>
            
            <br>
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <thead>
                        <tr class="fst-italic" >
                            <th>Id</th>
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Net_change_debit</th>
                            <th>Net_change_credit</th>
                            <th>Solde_debit</th>
                            <th>Solde_credit</th>
                        </tr>
                </thead>

                <tbody class="fw-lighter">
                        @php
                            $i=0;
                        @endphp

                        @forelse ($students as $student)

                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$student->matricule}}</td><!-- Numero -->
                            <td>{{$student->name}}</td><!-- Name -->
                            <td>{{$student->firstname}}</td><!-- Net_change_debit -->
                            <td>{{$student->notes}}</td><!-- Net_change_credit -->
                            <td>{{$student->mobile}}</td><!-- Solde_debit -->
                            <td>{{$student->email}}</td><!-- Solde credit -->
                        </tr>

                        @empty
                        <tr>
                            <td colspan="6">No Students</td>
                        </tr>

                        @endforelse

                </tbody>

        </table>
			</div>
    
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
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>