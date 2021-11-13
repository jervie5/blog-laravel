@extends('layouts.layout')
@section('content')
<div style="text-align: right;"><a href="/">Home</a></div>
<h1 style="text-align: center;"> Aggiunge Blog </h1>

<div style="text-align: center;">
    <form id="createForm" action="" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="titolo">Titolo</label><br>
        <input type="text" name="titolo" placeholder="Titolo...."><br>

        <label for="description">Descrizione</label><br>
        <textarea rows="6" cols="50" name="descrizione" name="descrizione" placeholder="Descrizione...."></textarea><br>


        <label for="autore">Autore</label>
        <input type="text" name="autore" placeholder="Autore...">

        <button id="btnCreate" type="submit">Submit Blog</button>

    </form>

</div>



@endsection