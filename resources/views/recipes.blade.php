@extends('layout')

@section('title')Resipes @endsection

@section('main_content')
    <a href="/addRecipe">Add new recipe</a>

    <h1>Recipes</h1>
    @foreach($recipes as $recipe)
        <div class="alert alert-warning">
            <p>Recipe name: {{$recipe->name}}</p>
            <p>Ingredients: {{$recipe->ingredients}}</p>
            <p>Steps: {{$recipe->steps}}</p>
{{--            <text>{{$recipe->foto}}</text>--}}
        </div>
    @endforeach
@endsection
