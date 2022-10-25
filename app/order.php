<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $fillable = ['id','categorie_id','produit_id','quantity'];

    public function categorie(){
        return $this->belongsTo('App\Categorie');

    }
    public function produit(){
        return $this->belongsTo('App\Produit');

    }
}
