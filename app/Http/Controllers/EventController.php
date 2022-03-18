<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function fireEvent(Request $request){
        $validated = $request->validate([
            'input' => 'required'
        ]);
        $subStr = $request->input('substr');
    }
}
