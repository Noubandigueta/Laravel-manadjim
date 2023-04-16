@extends('base')

@section('title', 'Blogs')

@section('content')


        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    @foreach ($posts as $post)

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture" style="max-width: 300px; border-radius: 20px 20px 20px 20px;">
                                <div class="card-body">

                                    <p class="card-text">{{ Illuminate\Support\str::limit($post->content, 100) }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!-- Lien pour afficher un Post : "posts.show" -->
                                            <a href="{{ route('posts.show', $post) }}" title="Lire l'article" >{{ $post->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
