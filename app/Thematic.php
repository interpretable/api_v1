<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thematic extends Model
{
    protected $fillable = [
        'name'
    ];
    public function item(){
        return $this->hasMany('\App\Item');
    }

}
