@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="text-align:center;">
            <div class="pull-left">
                <<h2 style="text-align: center;">Commande</h2><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('order.index') }}"> Retour</a><br><br>
            </div>
        </div>
    </div>

    <div class="row"  style=" table-layout: fixed;">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table  class="table table-bordered" style="text-align:center;   border-style: solid;
                border-width: 5px; color:black; border-radius: 10px;
                  padding: 5px;" >
 @foreach ($orders as $order)
                        <td><strong>Categorie:</strong></td>
                            <th> {{ $order->produit->categorie }}</th></tr>

            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <tr>
                    <td><strong>Produit:</strong></td>
                        <th> {{ $order->produit->name}}</th></tr>

            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                     <td><strong>Quantité:</strong></td>
                            <th> {{  $order->quantity }}</th></tr>
            </div>
         </div>
    </div>
@endforeach
    @endsection
