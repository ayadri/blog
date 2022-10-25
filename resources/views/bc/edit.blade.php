@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier le Bon de Commande</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bc.index') }}"> Retour</a>
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
<form action="{{ route('bc.update',$bc->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reference:</strong>
                <input  name="reference" value="{{ $bc->reference }}" class="form-control" placeholder="reference">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fournisseur:</strong>
                <input  name="supplier_id" value="{{ $bc->supplier_id }}" class="form-control" placeholder="Fournisseur">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produit:</strong>
                <input  name="produit" value="{{ $bc->produit }}" class="form-control" placeholder="produit">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantité:</strong>
                <input  name="qty" value="{{ $bc->qty }}" class="form-control" placeholder="quantite">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de Commande:</strong>
                <input  name="datec" value="{{ $bc->datec }}" class="form-control" placeholder="Date de Commande">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paiment:</strong>
                <input  name="paiment" value="{{ $bc->paiment }}" class="form-control" placeholder="paiment">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Echeance:</strong>
                <input  name="echeance" value="{{ $bc->echeance }}" class="form-control" placeholder="echeance">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
      </div>

  </form>
@endsection
