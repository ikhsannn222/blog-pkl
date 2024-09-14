@extends('layout.app')

@section('title',"judul : $post->title")

@section('content')
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }}</p>

            <p>{{ $post->content }}</p>
          </article>
          <a href="{{ url("posts") }}">< Kembali</a>
    </div>
@endsection
