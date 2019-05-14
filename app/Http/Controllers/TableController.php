<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class TableController extends Controller
{
    public function state()
    {
        $state = public_path().'/state.txt';
        $state = file_get_contents($state);

        $item = Item::where('card_id', $state)->first();
        
        $media_url = array();
        if(!$item){
            return 'There is no state defined on the table';
        }
        foreach($item->medias as $medias){
            array_push($media_url,asset('/medias').'/'.$medias );
        }
        $item->medias = $media_url;
        
        return $item;
    }

    public function setCardId($id)
    {
        $state = public_path().'/state.txt';
        file_put_contents($state, $id);
        $state = file_get_contents($state);

        return $state;
    }
}
