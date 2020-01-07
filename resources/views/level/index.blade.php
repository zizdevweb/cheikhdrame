

@extends('layouts.template')

@section('contenu_page')

        <table class="table table-striped">
            <tr>
                <th>#</th>          <th>classe</th>   <th>matier</th>        <th>departement</th>    <th>professeur</th>
            </tr>
            @foreach($levels as $level)

                <tr>
                    <th>#</th>
                    <th>{{$level->classe}}</th>

                    <th>{{$level->matier}}</th>

                    <th>{{$level->departement}} </th>

                    <th>{{$level->professeur}} </th>

                    <th> <p><a href="{{route('editer_level',['id'=>$level->id])}}">Editer</a></p></th>

 <th> <p> <button type="button"><a href="{{route('niveau.create')}}">Ajouter</a></button></p></th>
{{--                  <th> <p> <button type="button"><a href="{{route('niveau.create')}}">Ajouter</a></button></p></th>--}}


                </tr>
            @endforeach
        </table>

@endsection





















