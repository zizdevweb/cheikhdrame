
@extends('layouts.template')

@section('contenu_page')

    <form action="{{route('update_spinneret',['id'=>$spinneret->id])}}" method="post">
        @csrf
        @method('patch')

        <div><input type="text" name="nom" class="form-control" placeholder="le nom de la filiere"
                    value="{{$spinneret->nom}}"></div>

        <div><input type="text" name="description" class="form-control" placeholder=" description filiere"
                    value="{{$spinneret->description}}"></div>

        {{--    <div><input type="text" name="salaire" class="form-control" placeholder="Le salaire"--}}
        {{--                value="{{$spinneret->salaire}}"> </div>--}}

        <div> <button class="btn btn-primary">Enregistrer</button> </div>
    </form>



@endsection








