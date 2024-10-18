<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Posts</h2>

    <ul>
        @foreach ($posts as $post)
           <li>
             User id: {{ $post->user_id }}: {{ $post->title}}
             @can('can-edit', $post)
                <a href="/post/edit/{{ $post->id}}">Editar</a>                 
             @endcan
             <a href="">Deletar</a>
           </li>
        @endforeach
    </ul>
</body>
</html>
