@extends('layout')
@section('title', 'Index_voiture')
@section('content')
<div class="card mt-5">
    <div class="card-header d-flex justify-content-between">
        <h2 class="text-capitalize">liste des voitures</h2>
        <a href="/voiture/create" class="btn btn-success">Create</a>
    </div>
    <div class="card-body">
        <section class="row " >
            @foreach ($voitures as $voiture)
            <div class="col-4 my-3 text-center">
                <img src="/{{$voiture ->image}}" width="100%" alt="">
                <h2>{{$voiture ->serie}}</h2>
            </div>

            @endforeach
        </section>
    </div>

</div>
@endsection
