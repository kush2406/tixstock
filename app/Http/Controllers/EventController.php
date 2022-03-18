<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EventValidator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function fireEvent(Request $request){
        $validated = $request->validate([
            'input' => 'required'
        ]);
        $input = $request->input('input');

        // Validate the input usint EventValidator class
        try{
            $validate = new EventValidator($input);
            die('Validation passed, no exception thrown!');
        }
        catch(\Exception $e){
            return response()->json(["Exception" => get_class($e), 'msg' => $e->getMessage()], 500);
        }
        


    }
}
