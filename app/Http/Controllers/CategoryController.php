<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $list=Category::all();
        return view('index',['lists'=>$list]); //envoie les collections
    }
    public function show($id)
    {
        $model = Category::find($id); // envoie un element de la collection
        if($model==null){
            return "l'information n'est pas correcte";
        }
            return view('show',['test'=>$model]);
    }
}
