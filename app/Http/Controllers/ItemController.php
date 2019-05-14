<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;


class ItemController extends Controller
{

    // List All items
    public function listItems()
    {
        $items = Item::all();
        $media_url = array();

        // gets the api absolute url to media
        // TODO create a service or middleware
        foreach($items as $item){
            $item->card_picture = asset('/medias').'/'.$item->card_picture;
            //if(!$item->medias == 'null'){
                foreach($item->medias as $media){
                    array_push($media_url,asset('/medias').'/'.$media );
                }
                $item->medias = $media_url;
                $media_url = array();
                
            //}
        }
        return $items;
    }

    // List a single item
    public function listItem($id)
    {
        $item = Item::find($id);
        $media_url = array();
        // gets the api absolute url to media
        // TODO create a service or middleware
        foreach($item->medias as $medias){
            echo asset('/').$medias;
            array_push($media_url,asset('/medias').'/'.$medias );
        }
        $item->card_picture = asset('/medias').'/'.$item->card_picture;
        $item->medias = $media_url;

        return $item;
    }

    // Create a new item
    public function createItem(Request $request)
    {
        
        // Gets every element from the form-data and stores to db
        $item = Item::create([
            'name' => $request->input('name'),
            'medias' => 'null',
            'card_id' => $request->input('card_id'),
            'card_picture' => 'null',
            //'thematic_id' => 'thematic_id',
        ]);
        // TODO Check file size and mime type (png/jpeg < 2mb)
        // TODO Compress if image 
        // TODO Check resolution on each use case
        
        $destinationPath = 'medias/'.$item->id;

        // Move the card picture to directory of item
        $cardPicture = $request->file('card_picture');
        $cardPicture->move($destinationPath,$cardPicture->getClientOriginalName());
        $card_picture_path = $item->id.'/'.$cardPicture->getClientOriginalName();

        $media_path = array();
        // For each defined zone move file to directory and add to $media_path Array
        for ($i=1; $i < 5; $i++) { 
            $file = $request->file('zone'.$i);
            if($file){
                array_push($media_path, $item->id.'/'.$file->getClientOriginalName());
                $file->move($destinationPath,$file->getClientOriginalName());
            }
        }
       
        // Fetch and update item in db
        //$updateItem = Item::find($item->id);
        $item->update([
            'medias' => $media_path,
            'card_picture' => $card_picture_path
        ]);
        $item->save();

        return response()->json($item, 201);
    }


    // Update a single item based on his id
    public function updateItem($id,Request $request)
    {
        //var_dump($id);
        //var_dump($request->name);

        $item = Item::findOrFail($id);


        $destinationPath = 'medias/'.$item->id;
        // Move the card picture to directory of item
        if($request->file('card_picture')){
            $cardPicture = $request->file('card_picture');
            $cardPicture->move($destinationPath,$cardPicture->getClientOriginalName());
            $card_picture_path = $item->id.'/'.$cardPicture->getClientOriginalName();
        }

        $media_path = array();
        
        // Checks if files are uploaded
        if($request->file){
            // For each defined zone move file to directory and add to $media_path Array
            for ($i=1; $i < 5; $i++) { 
                $file = $request->file('zone'.$i);
                array_push($media_path, $item->id.'/'.$file->getClientOriginalName());
                $file->move($destinationPath,$file->getClientOriginalName());
            }
        }

        ($request->name) ? $item->update(['name' => $request->name,]) : '';
        ($request->card_id) ? $item->update(['card_id' => $request->card_id,]) : '';
        ($request->thematic_id) ? $item->update(['thematic_id' => $request->thematic_id,]) : '';
        ($request->medias) ? $item->update(['medias' => $request->$media_path,]) : '';
        
        //$item->save();
        return response()->json($item, 201);
    }

    
    // Delete a single item based on his id
    public function deleteItem($id)
    {
       $item = Item::findOrFail($id);
       $item->delete();
        return $item->name.' has been deleted';
    }
}
