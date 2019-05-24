<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'ip',
        'name',
        'id',
        'logs'
    ];

    protected $casts = [
        'logs' => 'array'
    ];


    protected $attributes = [
        'ip' => 'null',
        'logs' => '[]'
    ];
}
