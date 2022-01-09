@extends('layouts.index');
@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach($articles as $value)
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/500x250" class="card-img-top" alt="...">

                    <div class="card-body">
                        <a href="{{route('articlesOne',$value->id)}}"><h5 class="card-title">{{$value->title}}</h5></a>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($value->content,100,'...')}}</p>
                    </div>
                </div>
            </div>
        @endforeach



    </div>
    <br>
    {{$articles->links()}}
@endsection

