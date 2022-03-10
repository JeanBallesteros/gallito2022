<div class="card mb-2">
    <div class="card-body">
        <p class="card-text">
            <i class="fa-solid fa-clipboard"></i>
            &nbsp;
            {{ $post->content }}
        </p>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at/* ->diffForHumans() */}}</h6>
    </div>
</div>
