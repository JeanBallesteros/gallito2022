<div class="card mb-2">
    <div class="card-body">
        <div class="">
            <a href="{{ route('posts.edit', $post->id) }}">
                <i class="fa-solid fa-pencil" title="Editar post"></i>
            </a>
            <a href="">
                <i class="fa-solid fa-trash-can" title="Remover post"></i>
            </a>
        </div>
        <h5 class="card-title">{{ $user->name }}</h5>
        {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->format('d/m/Y') }}</h6> --}}
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
        <p class="card-text">{{ $post->content }}</p>
    </div>
</div>
