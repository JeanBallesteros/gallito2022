@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Crear una nueva publicación</h1></div>

                <div class="card-body">
                    @include('layouts.subview-form-errors')

                    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}
                        @include('posts.subview-post-fields')

                        <button type="submit" class="btn btn-primary">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
