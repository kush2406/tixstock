<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'title' => 'required|max:30',
            'content' => 'required',
            'author' => 'required',
            'category' => 'required',
            'published_at' => 'required|date|date_format:Y-m-d'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $validated = $validator->validated();
        $article = Article::create($request->all());
        unset($article->id); //Remove the id field from the response json 
        return response()->json($article, 201);
    }
}
