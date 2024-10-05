@extends('base')

@section('content')
<h1>Mon blog</h1>


@foreach($posts as $post)
<article class="shadow-sm rounded bg-gray-300">
    <p class="text-red-300">{{$post->title}}</p>
    <p>{{$post->content}}</p>
    <a href="{{ route('blog.show', ['slug'=> $post->slug ,'id'=>$post->id]) }}">voir l'article</a>
</article>
@endforeach

{{ $posts->links()}}
@endsection