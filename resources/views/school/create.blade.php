
@extends('layouts.template')

@section('contenu_page')


<div class="container">
    <div><h1>{{__('Enregistrement d\'un school')}}</h1></div>
    <div class="container">
        <form action="{{route('school.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="nom" class="form-control" placeholder="le nom school">
            </div>
            <div>
                <input type="text" name="adresse" class="form-control" placeholder="adresse">
            </div>
            <div>
                <input type="text" name="type" class="form-control" placeholder="Le type">
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div>
            <select name="spinnerets_id" id="spinnerets_id" class="form-control">
                <option value=""></option>

                @foreach($Spinneret as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>


@endsection
