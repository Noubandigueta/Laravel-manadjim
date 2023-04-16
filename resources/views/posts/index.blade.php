@extends('base')

@section('title', 'Tous les articles')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h1 style="color: blue; text-shadow: 4px 4px 5px rgb(78, 160, 11);">Tous les articles</h1>

                <p>
                    <!-- Lien pour créer un nouvel article : "posts.create" -->
                    <a href="{{ route('posts.create') }}" title="Créer un article" >Créer un nouveau post</a>
                </p>

                <!-- Le tableau pour lister les articles/posts -->
                <table class="table table-light table-striped-columns table-bordered caption-top" border="1/2">
                    <caption>Liste des postes</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>Titre</th>
                            <th colspan="2" >Opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- On parcourt la collection de Post -->
                        @foreach ($posts as $post)
                        <tr>
                            <td>
                                <!-- Lien pour afficher un Post : "posts.show" -->
                                <a href="{{ route('posts.show', $post) }}" title="Lire l'article" >{{ $post->title }}</a>
                            </td>
                            <td>
                                <!-- Lien pour modifier un Post : "posts.edit" -->
                                <a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" ><span style="color: green">Modifier</span></a>
                            </td>
                            <td>
                                <!-- Formulaire pour supprimer un Post : "posts.destroy" -->
                                <form method="POST" action="{{ route('posts.destroy', $post) }}" >
                                    <!-- CSRF token -->
                                    @csrf
                                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                    @method("DELETE")
                                    <input type="submit" value="x Supprimer" style="color: red">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
