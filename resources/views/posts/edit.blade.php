@extends('base')

@section('title', 'Créer un post')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h1 style="color: rgb(53, 32, 170); text-shadow: 4px 4px 5px rgb(78, 160, 11);">Créer un post</h1>

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="title" ><span style="color: rgb(32, 170, 32)">Titre</span></label><br/>
			<input type="text" name="title" value="{{ old('title') }}"  id="title" placeholder="Le titre du post" >

			<!-- Le message d'erreur pour "title" -->
			@error("title")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="picture" style="color: rgb(32, 170, 32)"><span>Selectionner l'image</span></label><br/>
			<input type="file" name="picture" id="picture" >

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="content" ><span style="color: rgb(32, 170, 32)">Contenu</span></label><br/>
			<textarea name="content" id="content" lang="fr" rows="5" cols="50" placeholder="Le contenu du post" >{{ old('content') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("content")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>
            </div>
        </div>
    </div>
@endsection
