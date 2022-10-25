<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bon de commande</title>
    <style>
        #bc {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#bc td, #bc th {
  border: 1px solid #ddd;
  padding: 8px;

}

#bc tr:nth-child(even){background-color: #f2f2f2;}

#bc tr:hover {background-color: #ddd;}
#bc th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #72a0a7;
  color: white;
}
    </style>
</head>
<body>
@extends('layout')
@section('content')
    <div class="row" style="margin:10%;">
        <div class="col-lg-12 margin-tb" style="text-align: center; ">
            <div class="pull-left">
                <div class="square">
             <br>   <h1 style="text-align: center;"><strong> Bon De Commande</h1><br><br>


                <p style="text-align: left;">Nom du laboratoire: </p>
                <p style="text-align: left;">Adresse:</p>
                <p style="text-align: left;">Code Postal:</p>
                <p style="text-align: left;">Télephone:</p>         <p style="text-align: right;">Commande N°: {{ $achat->ref }}</p>
                <p style="text-align: right;">Date:{{ $achat->date }}</p>

</strong>
<table class="table table-bordered" style="text-align:center;   border-style: solid;
border-width: 3px;  border-radius: 10px;
padding: 5px;" id="bc">

<thead style="border-style: solid;">
<tr style="border-style: solid;">
    <th class="w-20" style="border-style: solid; text-align:center;">Produit</th>
    <th class="w-20" style="border-style: solid; text-align:center;">Quantité</th>
    <th class="w-20" style="border-style: solid; text-align:center;">Prix</th>

    <th class="w-20" name="total" style="border-style: solid; text-align:center;">Total HT</th>
    <th class="w-20" name="action" style="border-style: solid; text-align:center;">Action</th>


</tr>
</thead>
<tbody>
    @php
        $ttl = 0;
    @endphp
    @foreach( $achat->produits as $prd )
    <tr style="border-style: solid; ">
        <td scope="col" style="border-style: solid; ">{{ $prd->produit }}</td>
        <td scope="col" style="border-style: solid; ">{{ $prd->quantite  }}</td>
        <td scope="col" style="border-style: solid; "> {{ number_format($prd->prix, 2, '.', ' ') }}</td>
        <td scope="col" style="border-style: solid; "> {{ number_format($prd->prix * $prd->quantite , 2, '.', ' ') }}</td>
        <td style="border: 1px solid black;">


            <a href="{{ route('apdestroy',$prd->id) }}" class="btn btn-danger">Supprimer</a>

        </td>
        <tr></tr>
    </tr>
    @php
        $ttl += $prd->prix * $prd->quantite;
    @endphp
    @endforeach



                    <tr style="border-style: solid; ">
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>


                    </tr>
                    <tr style="border-style: solid; ">
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>


                    </tr>

                    <tr style="border-style: solid; ">
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>


                    </tr>
                    <tr style="border-style: solid; ">
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>

                        <td style="border-style: solid; ">TVA:20%</td>
                        <td style="border-style: solid; ">{{ ( $ttl * 20 ) / 100 }}</td>

                    </tr>

                    <tr style="border-style: solid; ">
                        <td style="border-style: solid; "></td>
                        <td style="border-style: solid; "></td>

                        <td style="border-style: solid; ">Total en DH</td>
                        <td style="border-style: solid; ">{{ $ttl + ( ( $ttl * 20 ) / 100 ) }}</td>

                    </tr>


        <table class="table" id="tbl_achat_products">
            <thead>

            </thead>
            <tbody>
            </tbody>

        </table>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
</div>

</form>


@endsection
