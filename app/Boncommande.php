<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boncommande extends Model
{
    protected $table = 'bon_de_commande';
    public $fillable = ['reference','supplier_id','produit','qty','datec','client','paiment','echeance'];


    public function supplier(){
        return $this->belongsTo('App\Supplier');  }
        public function produit(){
            return $this->belongsTo('App\Produit');  }
}
