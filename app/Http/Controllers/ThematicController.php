<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thematic;

class ThematicController extends Controller
{
     // List All items
     public function listThemes()
     {
         $themes = Thematic::all();
         return $themes;
     }
}
