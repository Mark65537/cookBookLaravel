@extends('layout')

@section('title')Add Recipe @endsection

@section('main_content')
    <h1>Add Recipe Form</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="addRecipe/check">
        @csrf
{{--        <label for="file">Foto</label></p>--}}
{{--        <input type="file" name="r_foto" id="r_foto" value="Add Foto" class="form-control">--}}

        <label for="">Recipe name</label></p>
        <input type="text" name="r_name" id="r_name" class="form-control">

        <label for="">Ingredients</label></p>
        <input type="text" name="r_ingr" id="r_ingr" class="form-control">

        <label for="">Steps</label></p>
        <input type="text" name="r_steps" id="r_steps" class="form-control"></p>

        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection
