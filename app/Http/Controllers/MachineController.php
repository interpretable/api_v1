<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Machine;


class MachineController extends Controller
{
    public function sendIp($id,Request $request)
    {
        $machine = Machine::findOrFail($id);

        ($request->ip) ? $machine->update(['ip' => $request->ip,]) : '';
        return response()->json($machine->ip, 201);
    }


    // Oauth On this route + https
    public function getIp()
    {
        $machine = Machine::all();
        return response()->json($machine, 201);
    }
}
