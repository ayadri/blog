@extends('layout')
@section('content')
<h2 style="text-align:center;"> Fournisseur</h2>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('supplier.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10"  >
            <div class="form-group">
<table  class="table table-bordered" style="text-align:center;   border-style: solid;
border-width: 5px; color:black; border-radius: 10px;
  padding: 5px;" >
    <tr>
   <th ><strong>Code:</strong>
                    {{ $supplier->code }}</th></tr>
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                 <th><strong>Nom:</strong>
                     {{ $supplier->name }}</th>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">

         <tr> <th>  <strong>Email:</strong>
                {{ $supplier->email }}</th></tr>
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">

           <th> <strong>Télephone:</strong>
                {{ $supplier->phone }}</th></tr>
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">

          <tr> <th> <strong>Fix:</strong>
                {{ $supplier->fix}}</th></tr>
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">

           <tr> <th><strong>Adresse:</strong>
                {{ $supplier->adress}}</th></tr>
         </div>
        </div>
    </div>

    @endsection
