@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Editar un usuario</h1>
                </div>

                @include('layouts.subview-form-errors')

                <div class="card-body">
                    {!! Form::model($user, ['method' => 'put','route' => ['users.update', $user->id]]) !!}
                        @include('users.subview-user-fields')

                        <button type="submit" class="btn btn-primary">Editar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

