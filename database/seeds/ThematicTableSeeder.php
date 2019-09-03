<?php

use Illuminate\Database\Seeder;
use App\Thematic;

class ThematicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     *
     *
     * @return void
     */
    public function run()
    {
        Thematic::create(['name' => 'ALIMENTATION',]);
        Thematic::create(['name' => 'SOMMEIL',]);
        Thematic::create(['name' => 'SANTE',]);
        Thematic::create(['name' => 'BONJOUR',]);
        Thematic::create(['name' => 'AUREVOIR',]);
    }
}
