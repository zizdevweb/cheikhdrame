

@extends('layouts.template')


@section('contenu_page')

    <form action="{{route('update_professor',['id'=>$professor->id])}}" method="post">
        @csrf
        @method('patch')
        <div><input type="text" name="nom" class="form-control" placeholder="le nom du professor"
                    value="{{$professor->nom}}"></div>
        <div><input type="text" name="salaire" class="form-control" placeholder="Le salaire"
                    value="{{$professor->salaire}}"> </div>

        <div><input type="text" name="prenom" class="form-control" placeholder="le prenom du professor"
                    value="{{$professor->prenom}}"></div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>

    </form>
@endsection


{{--<div class="row">--}}
{{--   <div class="col-6 text-right"><img src="{{asset($professor->images)}}" alt="{{$professor->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>--}}
{{--</div>--}}
{{--<div>--}}
{{--   <input type="file" name="product_image" class="form-control">--}}
{{--</div>--}}








