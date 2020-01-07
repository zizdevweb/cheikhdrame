




@extends('layouts.template')


@section('contenu_page')


@yield('contenu_page')

<form action="{{route('update_people',['id'=>$people->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="nom" class="form-control" placeholder="le nom "
                value="{{$people->nom}}"></div>
    <div><input type="text" name="prenom" class="form-control" placeholder="le prenom "
                value="{{$people->prenom}}"></div>


    <div> <button class="btn btn-primary">Enregistrer</button> </div>

</form>

@endsection


