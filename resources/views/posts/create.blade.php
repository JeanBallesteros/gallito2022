@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Crear una nueva publicación</h1></div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}
                        <div class="mb-3">
                            <label for="content" class="form-label">Contenido</label>
                            {!! Form::textarea('content', '', ['class' => 'form-control', 'rows' => 3]); !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
