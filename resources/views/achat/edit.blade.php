@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center;">Modifier l'achat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('achat.index') }}"> Retour</a>
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

<form action="{{ route('achat.update',$achat->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Référence:</strong>
                <input  name="ref" value="{{ $achat->ref }}" class="form-control" placeholder="reference">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input  name="date" value="{{ $achat->date}}" class="form-control" placeholder="date">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Etat:</strong>
                <input  name="etat" value="{{ $achat->etat}}" class="form-control" placeholder="etat">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paiement:</strong>

                    <select  class="form-control form-control-solid rounded-0" id="paiment" name="paiment">
                        <option value="">virement</option>
                        <option value="">espèce </option>
                        <option value="">Cheque</option>
                      </select>
            </div>
        </select>
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

                @foreach( $achat->produits as $prd )
                <tr style="border-style: solid; ">
                    <td scope="col" style="border-style: solid; ">{{ $prd->produit }}</td>
                    <td scope="col" style="border-style: solid; ">{{ $prd->quantite  }}</td>
                    <td scope="col" style="border-style: solid; ">{{ $prd->prix  }}</td>


                    @endforeach

            </thead>
            <tbody>
            </tbody>

        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produit :</strong>
                <select  class="form-control form-control-solid rounded-0" id="produit_id">
                    <option value=""></option>
                    @foreach( $produit as $p )
                        <option value="{{ $p->id }}" >{{ $p->name }}</option>
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
                            <td> <input type="number" value="${price}" name="aprod[${ $prod_i }][price]" > <span onclick="deletetr(this)">X</span></td>

                        </tr>`);

                $("#produit_id").val('');
                $("#Quantite").val('');
                $("#Prix").val('');

                $prod_i ++;
            }



        });
    });

    function deletetr(o){

        $(o).closest('tr').remove();
    }
    </script>


@endsection
