<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shelf';
    public $fillable = ['id','name'];
}
