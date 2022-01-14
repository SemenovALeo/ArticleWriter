@extends('layouts.index')
@section('content')
<div class="col">
    @foreach($articles as $value)
    <div class="m-3 h-100 p-5 bg-light border rounded-3">
        <h2>{{$value->title}}</h2>
        <p>{{\Illuminate\Support\Str::limit($value->content,100,'...')}}</p>
        <a href="{{route('articlesOne',$value->id)}}" class="btn btn-outline-secondary" type="button">Просмотр</a>

    </div>
    @endforeach
        {{$articles->links()}}
</div>
@endsection
