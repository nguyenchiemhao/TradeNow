<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 'description', 'image', 'thumbnail'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
