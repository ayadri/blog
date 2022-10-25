<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorie';
    public $fillable = ['id','name'];

    public function __toString()
    {
        return $this->name;
    }

}
