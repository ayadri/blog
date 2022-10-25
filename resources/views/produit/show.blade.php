@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="text-align:center;">
            <div class="pull-left">
                <br><h1 style="text-align:center;"> Détail du Produit</h1><br><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produit.index') }}"  > Retour</a>
            </div>
        </div>
    </div>
<table>
    <div class="row" style=" table-layout: fixed;">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group">
                <table  class="table table-bordered" style="text-align:center;   border-style: solid;
                border-width: 5px; color:black; border-radius: 10px;
                  padding: 5px;" >
               <tr>
                <td><strong>Reference:</strong></td>
                    <th> {{ $produit->reference }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <tr>
                    <td><strong>Nom:</strong></td>
                        <th>   {{ $produit->name }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <tr>
                    <td> <strong>Prix:</strong></td>
                    <th>  {{ $produit->price }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <tr>
                    <td>  <strong>Description:</strong></td>
                    <th> {{ $produit->description }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                    <td> <strong>Unité:</strong></td>
              <th>  {{ $produit->unite }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                  <td> <strong>Date Expiration:</td></strong>
                <th> {{ $produit->date_exp }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                  <td>  <strong>Catégorie:</td></strong>
               <th>  {{ $produit->categorie_id }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                    <td><strong>Image:</td></strong>
                <th><img src="{{ asset('/storage/images/'.$produit->picture) }}" /></th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                     <td> <strong>Fournisseur:</td></strong>
              <th>  {{ $produit->supplier_id }}</th></tr>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                    <td>  <strong>Etagère:</td></strong>
               <th> {{ $produit->shelf_id}}</th></tr>
            </div>
        </div>
    </div>
</table>
@endsection
