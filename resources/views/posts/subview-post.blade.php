{{-- <div class="card mb-2">
    <div class="card-body">
        @if (Auth::id() === $user->id)
            <div class="">
                <a href="{{ route('posts.edit', $post->id) }}">
                    <i class="fa-solid fa-pencil" title="Editar post"></i>
                </a>
                <a href="">
                    <i class="fa-solid fa-trash-can" title="Remover post"></i>
                </a>
            </div>
        @endif
        <i class="fa-solid fa-user"></i><h5 class="card-title">{{ $user->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y') }}</h6>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
        <p class="card-text">{{ $post->content }}</p>
    </div>
</div> --}}


<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="" style=''>
                <a href="{{ url('/users/'.$user->id) }}">
                    <h5 class="card-title">
                        <i class="fa-solid fa-clipboard"></i>
                        {{ $user->name }}
                    </h5>
                </a>
            </div>
            <div class="d-flex justify-content-between">
                @if (Auth::id() === $user->id)
                    <div class="" style=''>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">
                            <i class="fa-solid fa-pen-to-square" title="Editar Post"></i>
                        </a>
                    </div>
                    &nbsp;
                    <div>
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                            {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                'type' => 'submit',
                                'title' => "Remover post",
                                'class' => 'btn btn-danger btn-sm',
                                'onclick' => 'return confirm("¿Está seguro de remover este post?\n\nTenga en cuenta que esta acción no se puede deshacer.")'
                            ]) !!}
                        {!! Form::close() !!}
                    </div>
                @endif
                {{-- <a href="http://www.google.com" onclick="return confirm('¿Está seguro?');">Google</a> --}}
            </div>
        </div>
        <div class="row mt-4"> {{-- Espaciado con mt-4 en la parte superior del div--}}
            <div class="col s6" >
                <h6 class="card-subtitle mb-2 text-muted"> {{ $post->created_at->format('d-m-Y') }}</h6>
            </div>
            <div class="col s6" style='text-align:right'>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans() }} </h6>
            </div>
        </div>
        <p class="card-text"> {{ $post->content }} </p>
    </div>
</div>
