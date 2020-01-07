@extends('layouts.template')
@section('contenu_page')
    <form action="{{route('update_student',['id'=>$student->id])}}" method="post">
        @csrf
        @method('patch')


        <div><input type="text" name="nom" class="form-control" placeholder="le nom de la filiere"
                    value="{{$student->nom}}"></div>

        <div><input type="text" name="prenom" class="form-control" placeholder=" prenom "
                    value="{{$student->prenom}}"></div>

        <div><input type="text" name="age" class="form-control" placeholder=" age"
                    value="{{$student->age}}"></div>

        <div><input type="text" name="date de naissance" class="form-control" placeholder=" datedenaissance"
                    value="{{$student->datedenaissance}}"></div>

        <div><input type="text" name="lieu de naissance" class="form-control" placeholder=" lieudenaissance"
                    value="{{$student->lieudenaissance}}"></div>


        <div><input type="text" name="telephone" class="form-control" placeholder=" telephone"
                    value="{{$student->telephone}}"></div>



        <div> <button class="btn btn-primary">Enregistrer</button> </div>
    </form>
@endsection






