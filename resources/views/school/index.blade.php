@extends('layouts.template')

@section('contenu_page')
<table class="table table-striped">
    <tr>
        <th>#</th>          <th>nom</th>           <th>adresse</th>           <th>type</th>
    </tr>
    @foreach($school as $school)

        <tr>
            <th>#</th>
            <th>{{$school ->name}}</th>
            <th>{{$school ->adresse}} </th>
            <th>{{$school ->type}}</th>


            <th> <p><a href="{{route('editer_school',['id'=>$school->id])}}">Editer</a> </p></th>


        </tr>
    @endforeach
</table>

@endsection




















