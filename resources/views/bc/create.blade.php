@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br><h4 style="text-align: center;">{{ $title }}</h4>
        <div class="box box-warning">

            <div class="box-body">
                <form role="form" action="{{ route('bc.store') }}" method="POST">
                    @csrf
                     <div class="box-body">
                      <div class="form-group">
                        <strong>Reference</strong>
                        <input type="text" name="reference" class="form-control" id="exampleInputEmail1" placeholder="Reference" value="{{ $ref }}">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fournisseur :</strong>
                            <select  class="form-control form-control-solid rounded-0" id="supplier_id" name="supplier_id">
                                <option value=""></option>
                                @foreach( $supplier as $s )
                                    <option value="{{ $s->id }}" >{{ $s->name }}</option>
                                @endforeach
                              </select>
                            <!--input class="form-control" name="supplier_id" placeholder="supplier_id"-->
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Produit :</strong>
                        <select name="produit" id="inputproduit" class="form-control" required="required">
                            @foreach( $produits as $c )
                            <option value="{{ $c->id }}" >{{ $c->name }}</option>
                        @endforeach
                        </select>
                    </div>
                        </div>
                        <button id="addprod">+</button>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
<br>
        <table class="table" id="tbl_achat_products">
            <thead>
                <tr>
                    <td>produit</td>
                    <td>qty</td>
                    <td>prix</td>
                </tr>
            </thead>
            <tbody>
            </tbody>

        </table>

        <hr>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Quantité:</strong>
                                <input class="form-control" name="qty" placeholder="quantite">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date de commande:</strong>
                                <input type="date" class="form-control" name="datec" placeholder="date">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Client:</strong>
                                <input type="text" class="form-control" name="client" placeholder="Client">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Paiement:</strong>
                                <select name="paiment" class="form-control" placeholder="Paiment">
                                    <option value="espece">Espèce</option>
                                    <option value="cheque">Chéque</option>
                                    <option value="virement">Virement</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Echeance:</strong>
                                <input type="number" class="form-control" name="echeance" placeholder="Echeance">
                            </div>
                        </div>
                    </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                  </form>
                  @if(isset($produit))
                  <div class="row">
                        <div class="col-md-12">
                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produit as $e=>$pd )
                                        <tr>
                                            <td>{{ $e+1 }}</td>
                                            <td>{{ $pd->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                  </div>
                  @endif
            </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
            $("#supplier_id").change(function(e){
                var supplier_id = $(this).val();
                var url = "{{ route('bc_get_produit') }}"+'/'+supplier_id;
                $.ajax({
                    url : url,
                    type:'get',
                    success: function( result ){
                        $.each( result, function(k, prd){
                            console.log( prd )
                            $("#inputproduit").append(`<option value="${ prd.id }">${ prd.name }</option>`);

                        } )

                    }
                })
                //window.location.href = url;
            })


        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })

    })
    $(document).ready(function(){

$prod_i = 1;

$('#addprod').click(function(e){
    e.preventDefault();


    var qty = $("#Quantite").val();
    var pid = $("#produit").val();
    var pname = $("#produit option:selected").text();

    if( pid && qty  ){
        $('#tbl_achat_products tbody').append(`
                    <tr>
                        <td>${ pname } <input type="text" value="${pid}" name="aprod[${ $prod_i }][prod_id]" ></td>
                        <td> <input type="number" value="${qty}" name="aprod[${ $prod_i }][qty]" ></td>
                    </tr>`);
                    $("#produit").val('');
            $("#Quantite").val('');
            $prod_i ++;}
</script>

@endsection
