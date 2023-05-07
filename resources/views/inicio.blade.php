@extends('Layouts.layoutSecundario')
@section('titulo')
    Welcome!! look the posts
@endsection
@section('contenido')
    <div class="card border border-dark mt-2 mb-3">
        <div class="card-body text-dark" style="background-color: rgba(128, 128, 128, 0.10)">


            <h1 class="card-title text-center">PUBLICACIONES</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($files as $post)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}" class="card-img-top" alt="Devstagram" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->titulo }}</h5>
                                <p class="card-text">
                                    <!--<small class="text-info"></small>-->
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
