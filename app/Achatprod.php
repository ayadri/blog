<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achatprod extends Model
{
    protected $table = 'achatprod';
    public $fillable = ['produit_id','achat_id','quantite', 'prix', 'tva'];

    public function produit(){
        return $this->belongsTo('App\Produit');
    }
}
