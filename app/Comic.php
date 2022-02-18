<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';

    //per usare fill 

    // protected $fillable = [
    //     'title',
    //     'description',
    //     'thumb',
    //     'price',
    //     'series',
    //     'sale_date',
    //     'type'
    // ];
}
