@extends('layouts.app')


@section('content')

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">SnapHats</h1>
        <p class="col-md-8 fs-4">
            Look our amazing collection of snapbacks
        </p>
    </div>
</div>


<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @forelse ($hats as $hat )

        <div class="col">
            <div class="card">
                <a href="{{route('guests.hats.show', $hat)}}">
                    <img class="card-img-top" src="{{$hat->image}}" alt="image of {{$hat->name}}">
                </a>
                <div class="card-body">
                    <a class="text-decoration-none" href="{{route('guests.hats.show', $hat)}}">
                        <h3 class="card-title">{{$hat->name}}</h3>
                    </a>
                    <div>{{$hat->price ?? 'Call for prices'}}</div>
                </div>
            </div>
        </div>

        @empty
        <div class="col">
            <p>Not hats sorry!</p>
        </div>
        @endforelse

    </div>
</div>
@endsection