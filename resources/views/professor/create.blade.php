@extends('layouts.template')
@section('contenu_page')

    <form action="{{route('professeur.store')}}" method="post">
        @csrf
        <div><input type="text" name="nom" class="form-control" placeholder="le nom du professor"
                    ></div>

         <div><input type="text" name="salaire" class="form-control" placeholder="Le salaire"
                    > </div>

        <div><input type="text" name="prenom" class="form-control" placeholder="le prenom du professor"
                    ></div>

        <div><input type="text" name="filiere" class="form-control" placeholder="le filiere"
                    ></div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>

    </form>
@endsection




