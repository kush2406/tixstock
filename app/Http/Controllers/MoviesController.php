<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function getMovieCount(Request $request){
        $validated = $request->validate([
            'substr' => 'required|string'
        ]);
        $subStr = $request->input('substr');
        return response()->json(['total'=>$this->getNumberOfMovies($subStr)],200);
    }

    public function getNumberOfMovies($movieStr){
        $url = "https://jsonmock.hackerrank.com/api/moviesdata/search/?Title=$movieStr"; // This url will return the results
        $results = file_get_contents($url);
        $results = json_decode($results);
        return $results->total;
    }
}
