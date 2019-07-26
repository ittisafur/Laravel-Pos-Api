<?php

namespace App\Model;

use App\Model\Sales;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function sale()
    {
        return $this->hasOne(Sales::class);
    }
}
