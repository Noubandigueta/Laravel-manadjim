@extends('base')

@section('title', '{{ $post->title }}')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1 style="color: blue; font-family: 'Times New Roman', Times, serif">{{ $post->title }}</h1>
            <div class="card">
                <img src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture" width="100%">
            </div>

            <div class="card-body">{{ $post->content }}</div>

            <p><a href="{{ route('app_blogs') }}" title="Retourner aux articles" >Retourner aux posts</a></p>
        </div>
    </div>
</div>

@endsection
