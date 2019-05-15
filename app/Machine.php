<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'ip',
        'name',
        'id'
    ];

    protected $attributes = [
        'ip' => 'null',
    ];
}
