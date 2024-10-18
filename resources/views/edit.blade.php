<form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    <button>Update</button>
</form>