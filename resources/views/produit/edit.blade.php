@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center;">Modifier le Produit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produit.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produit.update',$produit->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Référence:</strong>
                    <input  name="reference" value="{{ $produit->reference }}" class="form-control" placeholder="Référence">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input  name="name" value="{{ $produit->name }}" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prix:</strong>
                    <input class="form-control" style="height:150px" name="price" placeholder="Prix" value="{{ $produit->price }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Déscription:</strong>
                    <input class="form-control" style="height:150px" name="description" placeholder="Déscription" value="{{ $produit->description }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unité:</strong>
                    <input class="form-control" style="height:150px" name="unite" placeholder="Unité" value="{{ $produit->unite }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Expiration:</strong>
                    <input class="form-control" style="height:150px" name="date_exp" placeholder="Date Expiration" value="{{ $produit->date_exp }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Catégorie:</strong>
                    <input class="form-control" style="height:150px" name="category_id" placeholder="category_id" value="{{ $produit->category_id }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input class="form-control" style="height:150px" name="picture" placeholder="picture" value="{{ $produit->picture }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fournisseur:</strong>
                    <input class="form-control" style="height:150px" name="supplier_id" placeholder="supplier_id" value="{{ $produit->supplier_id }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Etagère:</strong>
                    <input class="form-control" style="height:150px" name="shelf_id" placeholder="shelf_id" value="{{ $produit->shelf_id}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input class="form-control" style="height:150px" name="stock" placeholder="stock" value="{{ $produit->stock}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Solde:</strong>
                    <input class="form-control" style="height:150px" name="solde" placeholder="solde" value="{{ $produit->solde}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Code barre:</strong>
                    <input class="form-control" style="height:150px" name="barcode" placeholder="code barre" value="{{ $produit->barcode}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Notes:</strong>
                    <input class="form-control" style="height:150px" name="notes" placeholder="notes" value="{{ $produit->notes}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>

    </form>
@endsection
