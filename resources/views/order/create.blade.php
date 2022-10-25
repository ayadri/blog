@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<h1 style="text-align:center;">Créer une nouvelle commande</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('order.index') }}"> Retour</a><br>
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
<form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
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
                <strong>Produit :</strong>
                <select  class="form-control form-control-solid rounded-0" id="produit_id" name="produit_id">
                    <option value=""></option>
                    @foreach( $produits as $c )
                        <option value="{{ $c->id }}" >{{ $c->name }}</option>
                    @endforeach
                  </select>

                <!--input class="form-control" type="text" name="categorie_id" placeholder="categorie id"-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantité:</strong>
                <input type="text"  name="quantity" class="form-control" placeholder="Quantité">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
