@extends('layouts.template')
@section('contenu_page')

    <form action="{{route('inscription.store')}}" method="post">
        @csrf
        <div><input type="text" name="nom" class="form-control" placeholder="le nom"
                    ></div>

         <div><input type="text" name="email" class="form-control" placeholder="email"
                    > </div>

        <div><input type="text" name="prenom" class="form-control" placeholder="le prenom "
                    ></div>
 <div><input type="text" name="date de naissance" class="form-control" placeholder="date naissance "
                    ></div>
 <div><input type="text" name="lieu de naissance" class="form-control" placeholder="lieu de naissance"
                    ></div>
 <div><input type="text" name="adresse" class="form-control" placeholder="adresse"
                    ></div>
 <div><input type="text" name="telephone" class="form-control" placeholder="telephone "
                    ></div>
 <div><input type="text" name="Situation Matrimoniale" class="form-control" placeholder="situationmatrimoniale "
                    ></div>
 <div><input type="text" name="genre" class="form-control" placeholder="le genre"
                    ></div>
        <div><input type="text" name="message" class="form-control" placeholder="le message"
                    ></div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>

    </form>
@endsection




