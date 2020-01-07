

@extends('layouts.template')


@section('contenu_page')

    <form action="{{route('update_level',['id'=>$level->id])}}" method="post">
        @csrf
        @method('patch')
        <div><input type="text" name="classe" class="form-control" placeholder="la claase"
                    value="{{$level->classe}}"></div>

        <div><input type="text" name="matier" class="form-control" placeholder="Le matier"
                    value="{{$level->matier}}"> </div>

        <div><input type="text" name="depatement" class="form-control" placeholder="le departement"
                    value="{{$level->departement}}"></div>

        <div><input type="text" name="professeur" class="form-control" placeholder="le professeur"
                    value="{{$level->professeur}}"></div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>

    </form>
@endsection









