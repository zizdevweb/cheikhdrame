
@extends('layouts.template')


@section('contenu_page')

    <form action="{{route('update_registration',['id'=>$registration->id])}}" method="post">
        @csrf
        @method('patch')
        <div><input type="text" name="nom" class="form-control" placeholder="le nom du professor"
                    value="{{$registration->nom}}"></div>
        <div><input type="text" name="email" class="form-control" placeholder="email"
                    value="{{$registration->email}}"> </div>

        <div><input type="text" name="prenom" class="form-control" placeholder="le prenom"
                    value="{{$registration->prenom}}"></div>

           <div><input type="text" name="datedenaissance" class="form-control" placeholder="date de naissance"
                    value="{{$registration->datedenaissance}}"></div>

           <div><input type="text" name="lieudenaissance" class="form-control" placeholder="lieu de naissance"
                    value="{{$registration->lieudenaissance}}"></div>

           <div><input type="text" name="situationmatrimonial" class="form-control" placeholder="situation matrimonial"
                    value="{{$registration->situationmatrimonial}}"></div>

           <div><input type="text" name="telephone" class="form-control" placeholder="telephone"
                    value="{{$registration->telephone}}"></div>

           <div><input type="text" name="genre" class="form-control" placeholder="le genre"
                    value="{{$registration->genre}}"></div>

           <div><input type="text" name="message" class="form-control" placeholder="le message"
                    value="{{$registration->message}}"></div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>

    </form>
@endsection














