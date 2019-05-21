<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'medias',
        'card_id',
        'card_picture',
        'thematic_id'
    ];

    protected $attributes = [
        'card_picture' => 'null',
        'thematic_id' => 0,
    ];

    protected $casts = [
        'medias' => 'array'
    ];

    public function thematic(){
        return $this->hasOne('\App\Thematic');
    }

}
