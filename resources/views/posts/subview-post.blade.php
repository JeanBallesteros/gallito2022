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
        <div class="row">
            <div class="col s10" >
                <h5 class="card-title">
                    <i class="fa-solid fa-clipboard"></i>
                    {{ $user->name }}
                </h5>
            </div>
            <div class="col s2" style='text-align:right'>
                @if (Auth::id() === $user->id)
                    <a href="{{ route('posts.edit', $post->id) }}">
                        <i class="fa-solid fa-pen-to-square" title="Editar Post"></i>
                    </a>

                    <a href="{{ route('posts.destroy', $post->id) }}">
                        <i class="fa-solid fa-trash-can" title="Eliminar Post"></i>
                    </a>
                @endif
            </div>
        </div>

        <div class="row">
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
