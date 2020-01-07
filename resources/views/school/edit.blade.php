
@extends('layouts.app')


@section('contenu_page')

<form action="{{route('update_school',['id'=>$school->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="nom" class="form-control" placeholder="le nom school"
                value="{{$school->nom}}"></div>

    <div><input type="text" name="prenom" class="form-control" placeholder="adresse"
                value="{{$school->adresse}}"></div>

    <div><input type="text" name="salaire" class="form-control" placeholder="Le type"
                value="{{$school->type}}"> </div>

    <div> <button class="btn btn-primary">Enregistrer</button> </div>

</form>

@endsection


