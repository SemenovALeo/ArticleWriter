@extends('layouts.index')

@section('content')

    <div class="row ">
        <h1>{{$articles->title}}</h1>
        <div class="">
            <img src="https://via.placeholder.com/250" class="img-responsive img-right" alt="...">
            <p>{{$articles->content}}</p>
        </div>
        <div>

        </div>
    </div>
@endsection

