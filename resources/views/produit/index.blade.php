<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Produit</title>
    <style>
        :root {
  --main-bg-color: #009d63;

  --second-text-color: #bbbec5;
  --second-bg-color: #c1efde;
  --main-text-color: #2774AE;
}

.primary-text {
  color: var(--main-text-color);
}

.second-text {
  color: var(--second-text-color);
}

.primary-bg {
  background-color: var(--main-bg-color);
}

.secondary-bg {
  background-color: var(--second-bg-color);
}

.rounded-full {
  border-radius: 100%;
}


#wrapper {
  overflow-x: hidden;
  --main-bg-color: #7CB9E8;
  background-color: #E1EBEE
}
#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin 0.25s ease-out;
  -moz-transition: margin 0.25s ease-out;
  -o-transition: margin 0.25s ease-out;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

#menu-toggle {
  cursor: pointer;
}

.list-group-item {
  border: none;
  padding: 20px 30px;
}

.list-group-item.active {
  background-color: transparent;
  color: var(--main-text-color);
  font-weight: bold;
  border: none;
}
img {
width : 100px;
height : 100px;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>STOCK APP</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="categorie" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class='bx bx-category'></i>Categories</a>
                <a href="achat" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Achats</a>
                <a href="produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class='bx bxl-product-hunt' ></i>Products</a>
                <a href="supplier" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class='bx bx-group' ></i>Fournisseurs</a>
                    <a href="order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class='bx bx-box' ></i>Commande</a>

                        <a href="supplier" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                            <i class='bx bxs-report'></i>Rapport</a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Déconnexion</a>
    </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Produit</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Utilisateur
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profil</a></li>

                                <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


            <h1 style="text-align:center;">Produit</h1>

            <div>
                <div class="mx-auto pull-right">
                    <div class="">
                        <form action="{{ route('produit.index') }}" method="GET" role="search">

                            <div class="input-group">
                                <span class="input-group-btn mr-1 ">
                                    <button class="btn btn-info" type="submit" title="Search produit">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </span>
                                <input type="text" class="form-control mr-0" name="term" placeholder="Chercher le produit" id="term">
                                <a href="{{ route('produit.index') }}" class=" mr-1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="button" title="Refresh page">
                                            <span class="fas fa-sync-alt"></span>
                                        </button>
                                    </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" style="text-align:center;   border-style: solid;
            border-width: 5px; border-color:black; border-radius: 10px;
              padding: 5px;">

                    <th style="border: 1px solid black;">ID</th>
                    <th style="border: 1px solid black;">Nom</th>
                    <th style="border: 1px solid black;">Prix</th>
                    <th style="border: 1px solid black;">Déscription</th>
                    <th style="border: 1px solid black;">Unité</th>
                    <th style="border: 1px solid black;">Date Expiration</th>
                    <th style="border: 1px solid black;">Catégorie</th>
                    <th style="border: 1px solid black; ">Image</th>
                    <th style="border: 1px solid black;">Fournisseur</th>
                    <th style="border: 1px solid black;">Etagère</th>
                    <th style="border: 1px solid black;">Stock</th>
                    <th style="border: 1px solid black;">Solde</th>
                    <th style="border: 1px solid black;">Code barre</th>
                    <th style="border: 1px solid black;">Notes</th>
                    <th width="300px" style="border: 1px solid black;">Action</th>
                </tr>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produit.create') }}"> Créer un nouveau produit</a><br><br>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


        @foreach ($produits as $produit)
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black;">{{ $produit->id }}</td>
            <td style="border: 1px solid black;">{{ $produit->name }}</td>
            <td style="border: 1px solid black;">{{ $produit->price }}</td>
            <td style="border: 1px solid black;">{{ $produit->description }}</td>
            <td style="border: 1px solid black;">{{ $produit->unite }}</td>
            <td style="border: 1px solid black;">{{ $produit->date_exp }}</td>
            <td style="border: 1px solid black;">{{ $produit->categorie  }} </td>
            <td style="border: 1px solid black;"><img src="{{ asset('/storage/images/'.$produit->picture) }}" /></td>
            <td style="border: 1px solid black;">{{ $produit->supplier }}</td>
            <td style="border: 1px solid black;">{{ $produit->shelf_id }}</td>
            <td style="border: 1px solid black;">{{ $produit->stock }}</td>
            <td style="border: 1px solid black;">{{ $produit->solde }}</td>
            <td style="border: 1px solid black;">{{ $produit->barcode }}</td>
            <td style="border: 1px solid black;">{{ $produit->notes }}</td>
            <td style="border: 1px solid black;">
                <a class="btn btn-info" href="{{ route('produit.show',$produit->id) }}">Détail</a>

                <a class="btn btn-primary" href="{{ route('produit.edit',$produit->id) }}">Modifier</a>

                <form action="{{ route('produit.destroy',$produit->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection

