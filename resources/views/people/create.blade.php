<div class="container">
    <div><h1>{{__('Enregistrement d\'un people')}}</h1></div>
    <div class="container">
        <form action="{{route('personnel.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="nom" class="form-control" placeholder="le nom ">
            </div>
            <div>
                <input type="text" name="prenom" class="form-control" placeholder="le prenom ">
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div>
            <select name="spinnerets_id" id="spinnerets_id" class="form-control">
                <option value=""></option>

                @foreach($prfessor as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>


