@extends('m4.layout')
@section('coontent')
<h1>Skill</h1>
<p>Berikut ini merupakan beberapa skill yang saya kuasai : </p>
<ol>
    @for ($i = 0; $i < count($skill); $i++) 
    <li>{{ $skill[$i] }}</li>
    @endfor
</ol>
@endsection
