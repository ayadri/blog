@extends('layout')
@section('content')
<style>
    body{
        --main-bg-color: #7CB9E8;
    }
    </style>
<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<h1 style="text-align:center;">Création d'un nouveau Produit</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produit.index') }}"> Retour</a><br>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Référence:</strong>
                <input type="text" name="reference" class="form-control" placeholder="Référence">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text"  name="name" class="form-control" placeholder="Nom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="text" name="price" class="form-control" placeholder="Prix">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Déscription:</strong>
                <input class="form-control" style="height:200px" name="description" placeholder="Déscription">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Unité:</strong>
                <input class="form-control"  name="unite" placeholder="Unité">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Expiration:</strong>
                <input class="form-control" type="date"  name="date_exp" placeholder="Date éxpiration">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catégorie :</strong>
                <select  class="form-control form-control-solid rounded-0" id="categorie_id" name="categorie_id">
                    <option value=""></option>
                    @foreach( $categories as $c )
                        <option value="{{ $c->id }}" >{{ $c->name }}</option>
                    @endforeach
                  </select>
                <!--input class="form-control" type="text" name="categorie_id" placeholder="categorie id"-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="exampleFormControlFile1"><strong> Image:</strong></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="picture" class="form-control-file"  id="picture" class="data-picker form control col-md-7 col-xs-12">
            </div></div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fournisseur :</strong>
                <select  class="form-control form-control-solid rounded-0" id="supplier_id" name="supplier_id">
                    <option value=""></option>
                    @foreach( $suppliers as $s )
                        <option value="{{ $s->id }}" >{{ $s->name }}</option>
                    @endforeach
                  </select>
                <!--input class="form-control" name="supplier_id" placeholder="supplier_id"-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Etagère:</strong>
                <select  class="form-control form-control-solid rounded-0" id="shelf_id" name="shelf_id">
                    <option value=""></option>
                    @foreach( $shelfs as $sh )
                        <option value="{{ $sh->id }}" >{{ $sh->name }}</option>
                    @endforeach
                  </select>
                <!--input class="form-control" name="shelf_id" placeholder="shelf_id"-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input class="form-control" name="stock" placeholder="stock">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Solde:</strong>
                <input class="form-control" name="solde" placeholder="solde">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code Barre:</strong>
                <input class="form-control" name="barcode" placeholder="barcode">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Notes:</strong>
                <input class="form-control" name="notes" placeholder="notes">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
</form>
@endsection
