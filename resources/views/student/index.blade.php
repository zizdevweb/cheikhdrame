@extends('layouts.template')
@section('contenu_page')
<table class="table table-striped">
    <tr><th>#</th> <th>nom</th> <th>prenom</th> <th>age</th><th>telephone</th> <th>datededenaissance</th> <th>lieudenaissance</th>

    </tr>
    @foreach($students as $student)
        <tr>
            <th>#</th>
            <th>{{$student->nom}}</th>
            <th>{{$student->prenom}} </th>
            <th>{{$student->age}} </th>
            <th>{{$student->telephone}} </th>
            <th>{{$student->datedenaissance}} </th>
            <th>{{$student->lieudenaissance}} </th>


            <th><p><a href="{{route('editer_student',['id'=>$student->id])}}">Editer</a> </p ></th>


 <th> <p> <button type="button"><a href="{{route('etudiant.create')}}">Ajouter</a></button></p></th>

       <form action="student/{{$student->id}}" method="post">
               @csrf
               @method('delete')
               <th> <p> <input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></p></th>
           </form>
        </tr>
    @endforeach
   </table>
@endsection
