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
        <h2>Create Marque</h2>
    </div>
    <div class="card-body">
        <form action="/marque" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
                <label>Marque</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                @error('name') <span class="text-danger"><b>{{$message}}</b></span>       @enderror
            </div>
            <div class="form-group my-3">
                <label>Logo</label>
                <input type="file" name="logo" class="form-control">
                @error('logo') <span class="text-danger"><b>{{$message}}</b></span>       @enderror

            </div>
            <button class="btn btn-dark my-3">Save</button>
        </form>
    </div>
</div>
@endsection
