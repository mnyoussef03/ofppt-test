@extends('layout')
@section('title', 'create')
@section('content')
<div class="my-3">
    @if(session('msg'))
    <span class="alert alert-success">{{session('msg')}}</span>
    @endif
</div>
<div class="card mt-5">

    <div class="card-header">
        <h2>Create Voiture</h2>
    </div>
    <div class="card-body">
        <form action="/voiture" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="form-group col-6 my-3">
                    <input placeholder='matricule' type="text" name="matricule" value="{{old('matricule')}}" class="form-control">
                @error('matricule') <span class="text-danger"><b>{{$message}}</b></span>       @enderror
            </div>
            <div class="form-group col-6 my-3">

                <input placeholder='serie' type="text" name="serie" value="{{old('serie')}}" class="form-control">
                @error('serie') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-6 my-3">

                <input placeholder='model' type="text" name="model" value="{{old('model')}}" class="form-control">
                @error('model') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-6 my-3">
                <input placeholder='couleur' type="text" name="couleur" value="{{old('couleur')}}" class="form-control">
                @error('couleur') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-6 my-3">

                <input placeholder='carburant' type="text" name="carburant" value="{{old('carburant')}}" class="form-control">
                @error('carburant') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-6 my-3">
                <input placeholder='puissance' type="text" name="puissance" value="{{old('puissance')}}" class="form-control">
                @error('puissance') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-6 my-3">

                <input  placeholder='prix' type="text" name="prix" value="{{old('prix')}}" class="form-control">
                @error('prix') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-6 my-3">
                <input   type="file" name="image" value="{{old('image')}}" class="form-control">
                @error('image') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <div class="form-group col-12 my-3">
                <select name='marque_id' id='' class="form-select" >
                    <option value="">Select Marque</option>
                    @foreach ($marques as $marque)
                    <option value="{{$marque->id}}">{{$marque->name}}</option>

                    @endforeach
                </select>
                @error('marque_id') <span class="text-danger"><b>{{$message}}</b></span>       @enderror
            </div>
            <button class="btn btn-dark my-3">Save</button>
        </div>
        </form>
    </div>
</div>
@endsection
