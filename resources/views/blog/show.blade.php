@extends('base')

@section('content')
<h1>Mon blog</h1>

<article class="">
    <p class="text-red-300">{{$post->title}}</p>
    <p>{{$post->content}}</p>
</article>

@endsection