@extends('layout')
@section('title', 'Index')
@section('content')
<div class="card mt-5">
    <div class="card-header d-flex justify-content-between">
        <h2 class="text-capitalize">liste des marques</h2>
        <a href="/marque/create" class="btn btn-success">Create</a>
    </div>
    <div class="card-body">
        <section class="row">
            @foreach ($marques as $marque)
            <div class="col-4 my-3 text-center">
                <img src="/{{$marque ->logo}}" alt="">
                <h2>{{$marque ->name}}</h2>
            </div>

            @endforeach
        </section>
    </div>

</div>
@endsection
