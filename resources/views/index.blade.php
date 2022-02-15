@extends('master')
@section('meta')
    <meta charset="UTF-8">
    <meta name="description" content="Tutoriel Laravel 8 gratuit">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')    <!-- afficher dans le card -->
<div class="card my-4">

    <!--recupere les donnees dans la collection du controller et les affiche dans blade.-->

    <h5 class="card-header">Recherche</h5>
    <form class="card-body" action="/search" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher..." name="q">
            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
            </span>
        </div>
    </form>
</div>
    <div class="row"> <!--pour definir la ligne-->
        @foreach ($lists as $list)
            <div class="col">   <!--pour definir la colonne-->
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $list->name }}</h5>       <!-- appeler le nom  qui est recuperer dans mla collections list vers la base de donnée -->
                    <p class="card-text">{{ $list->slug }}</p>
                    <a href='{{ url("/category/$list->id") }}' class="btn btn-danger">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
