<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produit';

    public $fillable = ['id','reference','name','price','description','unite','date_exp','picture','categorie_id','supplier_id','shelf_id','stock','solde','barcode','notes'];

    public function __toString()
    {
        return $this->name;
    }

    public function categorie(){
        return $this->belongsTo('App\Categorie');

    }
    public function supplier(){
    return $this->belongsTo('App\Supplier');  }



}
