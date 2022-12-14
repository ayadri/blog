<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FacLab</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #7dcbca;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: rgb(11, 10, 10);
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">FACLAB</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+212</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading"> Num??ro de facture:</h2>

                    <p class="sub-heading">Date de commande:</p>
                    <p class="sub-heading"> Addresse Email:</p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Nom: <input type="text"  name="nom" class="form-control" placeholder="nom">  </p>
                    <p class="sub-heading">Addresse: <input type="text"  name="adresse" class="form-control" placeholder="adresse"> </p>
                    <p class="sub-heading">T??lephone:<input type="text"  name="telephone" class="form-control" placeholder="telephone">  </p>
                    <p class="sub-heading">Ville: <input type="text"  name="ville" class="form-control" placeholder="ville"> </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Commandes</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th class="w-20">Prix</th>
                        <th class="w-20" >Quantit??</th>
                        <th class="w-20" name="total" >Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                     @foreach ( $orders as $o )

                        <td scope="col" value="{{ $o->produit_id }}">{{ $o->produit->name }}</td>
                        <td scope="col" value="{{ $o->produit_id }}">{{ $o->produit->price  }}</td>
                        <td scope="col" value="{{ $o->produit_id }}">{{ $o->quantity  }}</td>
                        <td scope="col">18140</td>
                        <tr></tr>
                        @endforeach
                    </tr>


                    <tr>
                        <td colspan="3" class="text-left" >Grand Total</td>
                        <td>18140</td>
                    </tr>
                </tbody>
            </table>
            <br>

        </div>


    </div>

</body>
</html>
