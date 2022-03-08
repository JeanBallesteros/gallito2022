@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Crear un usuario</h1>
                </div>

                @include('layouts.subview-form-errors')

                <div class="card-body">
                    {!! Form::open(['route' => 'users.store', 'method' => 'user']) !!}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            {!! Form::text('name', '', ['class' => 'form-control', 'rows' => 3]); !!}

                            <label for="email" class="form-label">Email:</label>
                            {!! Form::text('email', '', ['class' => 'form-control', 'rows' => 3]); !!}

                            <label for="password" class="form-label">Contraseña:</label>
                            {!! Form::password('password', ['class' => 'form-control', 'rows' => 3]); !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

