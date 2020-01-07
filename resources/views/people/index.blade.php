@extends('layouts.template')

@section('contenu_page')
<table class="table table-striped">
    <tr>
        <th>#</th>          <th>nom</th>                     <th>prenom</th>
    </tr>
    @foreach($people as $people)
        <tr>
            <th>#</th>
            <th>{{$people->name}}</th>
            <th>{{$people->prenom}}</th>

          <th><p><a href="{{route('editer_people',['id'=>$people->id])}}">Editer</a></p></th>




 <th> <p> <button type="button"><a href="{{route('personnel.create')}}">Ajouter</a></button></p></th>

       <form action="student/{{$people->id}}" method="post">
               @csrf
               @method('delete')
               <th> <p> <input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></p></th>
           </form>



        </tr>
    @endforeach
</table>

@endsection




















