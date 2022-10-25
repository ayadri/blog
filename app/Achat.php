<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'achat';
    public $fillable = ['id','ref','date','produit_id','etat','paiment','montant','qty'];

    public function produits(){
        return $this->hasMany('App\Achatprod');

    }
}
