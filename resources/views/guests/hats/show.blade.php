@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <img class="img-fluid" src="{{$hat->image}}" alt="image of {{$hat->name}}">
        </div>
        <div class="col">
            <h3 class="card-title">{{$hat->name}}</h3>
            <div>{{$hat->description}}</div>
            <div>{{$hat->price ?? 'Call for prices'}}</div>
        </div>
    </div>
</div>

@endsection