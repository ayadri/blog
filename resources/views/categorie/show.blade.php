@extends('layout')
@section('content')
    <div class="row" style="text-align: center;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             <br>   <h2 style="text-align: center;"> Détail</h2><br><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categorie.index') }}"> Retour</a><br><br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table  class="table table-bordered" style="text-align:center;   border-style: solid;
                border-width: 5px; color:black; border-radius: 10px;
                  padding: 5px;" >
                <tr><td> <strong>Nom:</strong></td>
               <th>
                      {{ $categorie->name }}</th>
                </tr>
                </table>
            </div>
         </div>
    </div>

    @endsection
