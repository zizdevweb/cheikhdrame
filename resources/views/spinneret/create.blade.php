
@extends('layouts.template')

@section('contenu_page')

<div class="container">
    <div><h1>{{__('Enregistrement d\'un spinneret')}}</h1></div>
    <div class="container">
        <form action="{{route('filiere.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="nom" class="form-control" placeholder=" nom filiere">
            </div>

            <div>
                <input type="text" name="description" class="form-control" placeholder="description filiere">
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>


@endsection
