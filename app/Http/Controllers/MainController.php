<?php

namespace App\Http\Controllers;

use App\Models\RecipeModel;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function home(){
        return view('home');
    }

    public function recipes(){
        $recipes=new RecipeModel();
        return view('recipes', ['recipes'=> $recipes->all()]);
        //        return dd($recipes->all());
    }

    public function addRecipe(){
        return view('addRecipe');
    }

    public function addRecipeCheck(Request $request){
        //dd($request);//для вывода debug информации
        $valid= $request->validate([
            'r_name' => 'required',
            'r_ingr' => 'required',
            'r_steps' => 'required',
        ]);

        $resipes=new RecipeModel();
        $resipes->name=$request->input('r_name');
        $resipes->ingredients=$request->input('r_ingr');
        $resipes->steps=$request->input('r_steps');
        $resipes->foto=$request->input('r_name');

        $resipes->save();

        return redirect()->route('recipes');
    }

    public function ingredients(){
        return view('ingredients');
    }

    public function about(){
        return view('about');
    }
}
