
@extends('layouts.template')

@section('contenu_page')

<div class="container">
    <div><h1>{{__('Enregistrement d\'un student')}}</h1></div>
    <div class="container">
        <form action="{{route('etudiant.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="nom" class="form-control" placeholder=" nom filiere">
            </div>

            <div>
                <input type="text" name="prenom" class="form-control" placeholder=" prenom ">
            </div>


            <div>
                <input type="text" name="age" class="form-control" placeholder=" age">
            </div>
            <div>
                <input type="text" name="datedenaissance" class="form-control" placeholder="datedenaissance ">
            </div>

            <div>
                <input type="text" name="lieudenaissance" class="form-control" placeholder=" lieudenaissance ">
            </div>
            <div>
                <input type="text" name="telephone" class="form-control" placeholder=" telephone ">
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
@endsection
