@extends('base')

@section('content')
<section class="flex gap-2">
    @foreach($posts as $post)
    <article class="shadow-md rounded p-3">
        <p class="text-blue-500 font-bold">{{$post->title}}</p>
        <p>{{$post->content}}</p>
        <a href="{{ route('blog.show', ['slug'=> $post->slug ,'id'=>$post->id]) }}">
            <button class="bg-blue-500 text-white px-2 py-0.5 rounded shadow-sm hover:bg-blue-600 transition">
                voir l'article
            </button>
        </a>
    </article>
    @endforeach
</section>
@endsection