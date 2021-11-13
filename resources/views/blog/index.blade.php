@extends('layouts.layout')
@section('content')

<div style="text-align: right;"><a href="/">Home</a></div>
<div style="text-align: center;">
    <div>
        <h1 style="background-color: lightcyan;">Blog Post</h1>
    </div>

    @foreach($blogs as $blog)

    <div style="text-align: center; margin: 0 3rem">
        <h2>{{$blog->titolo}}</h2>

        <div style="padding: 0 25vw;">
            <p>
                {{$blog->descrizione}}
            </p>
            
            <span style="font-size: 14px;">
                Scritto da: {{$blog->autore}}
            </span>
            
            <div style="margin: 4rem 0;">
                
                <a style="color: green" href="/blog/create">Aggiunge</a>
                @if(Route::has('login'))
                @auth
                <a style="color: orange;" href="{{route('aggiorna-blog',$blog->id)}}">|| Aggiorna</a>
                <a style="color: red;" href="{{route('elimina-blog',$blog->id)}}"">|| Elimina</a>
                @endif
                @endauth
            </div>
        </div>
    </div>
        
</div>
@endforeach

@endsection
