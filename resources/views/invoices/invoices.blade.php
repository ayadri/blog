
@extends('layout')
@section('title')
   Les factures
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Factures</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/Liste des factures</span>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                <thead>
                    <tr>
                        <th class="border-bottom-0">#</th>
                        <th class="border-bottom-0">Réference</th>
                        <th class="border-bottom-0">Date de facture</th>
                        <th class="border-bottom-0">Produit</th>
                        <th class="border-bottom-0">Catégorie</th>
                        <th class="border-bottom-0">Remise</th>
                        <th class="border-bottom-0">Total</th>
                    </tr>
                </thead>
                <tbody>
@endsection
