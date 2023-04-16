@extends('base')

@section('title', 'Dashboard')

@section('content')
<div class="container" style="margin-bottom: 10%">
    <h1 style="color: blue; font-family: 'Times New Roman', Times, serif;">Dashboard</h1>
    <div class="row">
        <div class="card">
            <a href="{{ url('posts') }}">Ajouter des posts pour vos visiteurs</a>
            <h5></h5>
            <table class="table table-bordered caption-top ">
                <caption>List of users</caption>
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom & Prenoms</th>
                    <th scope="col">Type</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->email }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
