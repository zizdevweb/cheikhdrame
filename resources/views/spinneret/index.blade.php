
@extends('layouts.template')

@section('contenu_page')
<table class="table table-striped">
    <tr>
        <th>#</th>          <th>nom</th>           <th>description</th>
    </tr>
    @foreach($spinneret as $spinneret)
        <tr>
            <th>#</th>
            <th>{{$spinneret->nom}}</th>
            <th>{{$spinneret->description}} </th>


       <th><p><a href="{{route('editer_spinneret',['id'=>$spinneret->id])}}">Editer</a> </p> </th>


 <th> <p> <button type="button"><a href="{{route('filiere.create')}}">Ajouter</a></button></p></th>


       <form action="spin/{{$spinneret->id}}" method="post">
               @csrf
               @method('delete')
               <th> <p> <input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></p></th>
           </form>

        </tr>
    @endforeach
</table>
@endsection





















