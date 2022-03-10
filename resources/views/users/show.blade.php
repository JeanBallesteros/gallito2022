@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Usuario #{{ $user->id }}</h1>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="card-body">
                        <h5>Nombre del usuario: {{ $user->name }}</h5>
                        <h5>Correo electrónico: {{ $user->email }}</h5>
                    </div>
                    <div>
                        @if (Auth::id() === $user->id)
                            <div class="" style=''>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-pen-to-square" title="Editar User"></i>
                                </a>
                            </div>
                        @endif
                        {{-- <a href="http://www.google.com" onclick="return confirm('¿Está seguro?');">Google</a> --}}
                    </div>
                </div>

                <div class="previous">
                    <a href="{{ url()->previous() }}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
