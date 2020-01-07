

@extends('layouts.template')

@section('contenu_page')

        <table class="table table-striped">
            <tr>
                <th>#</th>          <th>nom</th>   <th>prenom</th>        <th>salaire</th> <th>filiere</th>
            </tr>
            @foreach($professors as $professor)

                <tr>
                    <th>#</th>
                    <th>{{$professor->nom}}</th>

                    <th>{{$professor->prenom}}</th>

                    <th>{{$professor->salaire}} </th>

                    <th>{{$professor->Spinneret->nom}} </th>

                    <th> <p><a href="{{route('editer_professor',['id'=>$professor->id])}}">Editer</a>
                    </p></th>

                  <th> <p> <button type="button"><a href="{{route('professeur.create')}}">Ajouter</a></button></p></th>

       <form action="prof/{{$professor->id}}" method="post">
               @csrf
               @method('delete')
               <th> <p> <input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></p></th>
           </form>


                </tr>
            @endforeach
        </table>

@endsection





















