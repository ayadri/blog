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
                <p style="text-align: left;">Télephone:</p>  <p style="text-align: right;">Commande N°: {{ $bc->reference }}</p>
                                                            <p style="text-align: right;">Date:{{ $bc->datec }}</p>
                                                            <p style="text-align: right;">Client:{{ $bc->client }}</p>
             </strong>
         <table class="table table-bordered" style="text-align:center;   border-style: solid;
             border-width: 3px;  border-radius: 10px;
               padding: 5px;" id="bc">

                 <thead style="border-style: solid;">
                    <tr style="border-style: solid;">



                        <th  class="w-20" style="border-style: solid; ">Fournisseur</th>
                        <th class="w-20" style="border-style: solid; ">Produit</th>
                        <th class="w-20" style="border-style: solid; ">Quantité</th>
                        <th class="w-20" style="border-style: solid; ">Date de commande</th>
                        <th class="w-20" style="border-style: solid; ">Paiement</th>
                        <th class="w-20" style="border-style: solid; ">Echeance</th>
                        <th class="w-20" name="total" style="border-style: solid; ">Total HT</th>

                    </tr>
                </thead>
                <tbody>
                    <tr style="border-style: solid; ">


                           <td scope="col"style="border-style: solid; ">{{ $bc->supplier }}</td>
                           <td scope="col" style="border-style: solid; ">{{ $bc->produit  }}</td>
                           <td scope="col" style="border-style: solid; ">{{ $bc->qty  }}</td>
                           <td scope="col" style="border-style: solid; ">{{ $bc->datec }}</td>
                           <td scope="col" style="border-style: solid; ">{{ $bc->paiment }}</td>
                           <td scope="col" style="border-style: solid; ">{{ $bc->echeance }}</td>
                           <td scope="col" style="border-style: solid; "></td>
                           <tr></tr>

                       </tr>
<tr style="border-style: solid; ">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>

</tr>
<tr style="border-style: solid; ">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid; border-color:"></td>
    <td style="border-style: solid; border-color:"></td>
    <td style="border-style: solid; border-color:dodgerblue;"></td>

</tr>
<tr style="border-style: solid;">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>

</tr>
<tr style="border-style: solid; ">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>

</tr>
<tr style="border-style: solid;">
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>

</tr>
<tr style="border-style: solid;">
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>
    <td style="border-style: solid;"></td>

</tr>
<tr style="border-style: solid; ">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
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
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>

</tr>
<tr style="border-style: solid; ">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; ">TVA:20%</td>
    <td style="border-style: solid; "></td>

</tr>
<tr style="border-style: solid; ">
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; "></td>
    <td style="border-style: solid; ">Total TTC</td>
    <td style="border-style: solid; "></td>

</tr>
                    </tr>
                </tbody>
            </table>








        </div>
        </div>
    </div>

