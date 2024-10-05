@extends('base')

@section('content')
<h1>Mon blog</h1>


@foreach($posts as $post)
<article>
    <p>{{$post->title}}</p>
    <p>{{$post->content}}</p>
</article>
@endforeach

{{ $posts->links()}}
@endsection