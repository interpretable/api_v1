<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Machine;

use Carbon\Carbon;


class MachineController extends Controller
{

    // List every machine in db
    public function listMachines()
    {
        $machines = Machine::all();
        return response()->json($machines, 201);
    }


    public function updateMachine($id,Request $request)
    {
        // Gets machine in db based on id
        $machine = Machine::findOrFail($id);

        $logs_path = array();
       
        // Date based variable
        $date = Carbon::now();

        // Defines where to store the log files
        $destinationPath = 'machines/'.$id.'/'.$date->format('d-m-Y');
        $file = $request->file('log');
        // moves the file in the public storage
        if($file){
            if($file->getClientOriginalExtension() == 'json'){
                $file->move($destinationPath,$file->getClientOriginalName());
            }
            else{
                return response()->json('Only json files are allowed', 406);
            }
            
        }

        $logs = $machine->logs;
        ($machine->logs) ? $logs = $machine->logs : $logs = array();
       
        // Adds the path of the moved log file in db
        if ($logs) {
            array_push($logs, $destinationPath.'/'.$file->getClientOriginalName());
            $machine->update(['logs' => $logs]);
        }
        /** If logs are empty in db creates an array 
        *** pushes the log path and updates the db
        **/
        else {
            $logs = array();
            array_push($logs, $destinationPath.'/'.$file->getClientOriginalName());
            $machine->update(['logs' => $logs]);
        }

        // Updates the machine's ip in the db
        ($request->ip) ? $machine->update(['ip' => $request->ip]) : '';
        
        return response()->json($machine, 201);
    }

    public function listMachine($id)
    {
        $machine = Machine::find($id);

        $json = array();

        // Returns in array the content of the log files
        if($machine->logs){
            foreach ($machine->logs as $log) {
                
                $log = json_decode(file_get_contents($log), true); 
                array_push($json, $log);
            }

        }

        $machine->logs = $json;      
        
        return response()->json($machine, 201);
    }
    
}
