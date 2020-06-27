<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable =
    [
        'name',
        'storage',
        'emails',
        'domains',
        'support',
        'price',
        'url'
    ];
}
