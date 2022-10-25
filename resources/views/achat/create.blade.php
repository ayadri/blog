@extends('layout')
<h1 style="text-align:center;">Créer un nouveau Achat</h1>
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('achat.index') }}"> Retour</a>
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

<form action="{{ route('achat.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Référence:</strong>
                <input type="text" name="ref" class="form-control" placeholder="référence">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="date" class="form-control" placeholder="date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Etat:</strong>
                <input type="text" name="etat" class="form-control" placeholder="état">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paiement:</strong>
                <input type="text" name="paiment" class="form-control" placeholder="paiment">
            </div>
        </div>

        <hr>
        <hr>

        <table class="table" id="tbl_achat_products">
            <thead>
                <tr>
                    <td>Produit</td>
                    <td>Quantité</td>
                    <td>Prix</td>
                </tr>
            </thead>
            <tbody>
            </tbody>

        </table>

        <hr>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produit :</strong>
                <select  class="form-control form-control-solid rounded-0" id="produit_id">
                    <option value=""></option>
                    @foreach( $produit as $c )
                        <option value="{{ $c->id }}" >{{ $c->name }}</option>
                    @endforeach
                  </select>

                <!--input class="form-control" type="text" name="categorie_id" placeholder="categorie id"-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantité:</strong>
                <input type="text" name="qty" id="quantite" class="form-control" placeholder="quantité">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="number" id="Prix" class="form-control" placeholder="Prix">
            </div>
        </div>



        <button id="addprod">+</button>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</div>

</form>

<script>
$(document).ready(function(){

    $prod_i = 1;

    $('#addprod').click(function(e){
        e.preventDefault();
        //alert('hi');

        var pid = $("#produit_id").val();
        var pname = $("#produit_id option:selected").text();
        var qty = $("#quantite").val();
        var price = $("#Prix").val();

        if( pid && qty && price ){

            $('#tbl_achat_products tbody').append(`
                    <tr>
                        <td>${ pname } <input type="text" value="${pid}" name="aprod[${ $prod_i }][prod_id]" ></td>
                        <td> <input type="number" value="${qty}" name="aprod[${ $prod_i }][qty]" ></td>
                        <td> <input type="number" value="${price}" name="aprod[${ $prod_i }][price]" ></td>
                    </tr>`);

            $("#produit_id").val('');
            $("#Quantite").val('');
            $("#Prix").val('');

            $prod_i ++;
        }



    });
});
</script>


@endsection
