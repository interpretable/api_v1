<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thematic extends Model
{
    protected $fillable = [
        'name'
    ];
    public function thematics(){
        return $this->hasOne('\App\Thematics');
    }

}
