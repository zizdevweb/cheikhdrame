@extends('layouts.template')
@section('contenu_page')

    <form action="{{route('niveau.store')}}" method="post">
        @csrf
        <div><input type="text" name="classe" class="form-control" placeholder="la classe"
                    ></div>

         <div><input type="text" name="matier" class="form-control" placeholder="Le matier"
                    > </div>

        <div><input type="text" name="departement" class="form-control" placeholder="le departement"
                    ></div>

        <div><input type="text" name="professeur" class="form-control" placeholder="les professeur"
                    ></div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>

    </form>
@endsection




