<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'supplier';
    public $fillable = ['id','code','name','email','phone','fix','adress'];

    public function __toString()
    {
        return $this->name;
    }
}
