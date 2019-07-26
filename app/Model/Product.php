<?php

namespace App\Model;

use App\Model\Sales;
use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }

}
