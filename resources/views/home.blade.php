@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

                {{-- <div class="card-body">
                    @forelse ($posts as $post)
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">
                                    @foreach ($users as $user)
                                        @if ($post->user_id)
                                            @if ($post->user_id == $user->id)
                                                <h5 class="card-title">{{ $user->name }}</h5>
                                            @endif
                                        @endif
                                    @endforeach
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at/* ->diffForHumans() */}}</h6>
                                <p class="card-text">{{ $post->content }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info" role="alert">
                            No hay posts.
                        </div>
                    @endforelse
                </div> --}}



                <div class="card-body">
                    @forelse ($posts as $post)
                        <h5 class="card-title">
                            @include('subview-home')
                        </h5>
                        {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at/* ->diffForHumans() */}}</h6>
                        <p class="card-text">{{ $post->content }}</p> --}}
                    @empty
                        <div class="alert alert-info" role="alert">
                            No hay posts.
                        </div>
                    @endforelse
                </div>






            </div>
        </div>
    </div>
</div>
@endsection
