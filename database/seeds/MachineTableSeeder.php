<?php

use Illuminate\Database\Seeder;
use App\Machine;

class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Machine::create(['id' => '1','name' => 'MDM Bramet - Bron',]);
        Machine::create(['id' => '2', 'name' => 'MDM Fontaine-sur-Saône',]);
        Machine::create(['id' => '3','name' => 'MDM Jean Jaurès - Vaulx-en-Velin',]);
    }
}
