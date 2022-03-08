@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Publicaciones de {{ $user->name }}</h1>
                </div>

                <div class="card-body">
                    @forelse ($posts as $post)
                        @include('posts.subview-post')
                    @empty
                        <div class="alert alert-info" role="alert">
                            El usuario no ha publicado mensajes.
                        </div>
                    @endforelse

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

