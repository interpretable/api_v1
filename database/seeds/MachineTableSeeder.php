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
        Machine::create(['id' => '666','name' => 'MDM1',]);
        Machine::create(['id' => '777', 'name' => 'MDM2',]);
        Machine::create(['id' => '888','name' => 'MDM3',]);
    }
}
