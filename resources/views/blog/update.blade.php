@extends('layouts.layout')

@section('title','Aggiorna Blog')

@section('content')
<div style="text-align: right;"><a href="/">Home</a></div>
<div style="text-align: center;">

    <h1>Aggiorna Blog</h1>

    <div>
        <form action="" method="post">
            <input class="intUpdate" type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for="titolo">Titolo</label><br>
            <input class="intUpdate" type="text" name="titolo" placeholder="Title.." value="{{$blogs->titolo}}"><br>

            <label for="descrizione">Descrizione</label><br>
            <input id="textArea" type="text" name="descrizione" placeholder="descrizione" value="{{$blogs->descrizione}}"><br>


            <!-- <label for="description">Descrizione</label><br>
            <textarea type="text" rows="6" cols="50" name="descrizione" name="descrizione" placeholder="Descrizione...."></textarea><br> -->

            <label for="autore">Autore</label><br>
            <input class="intUpdate" type="text" name="autore" placeholder="autore" value="{{$blogs->autore}}"><br>
            <button id="btnCreate" type="submit">Submit Blog</button>
        </form>
    </div>
</div>

@endsection