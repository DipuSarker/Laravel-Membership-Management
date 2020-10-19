<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    
    <style>
        .badge-count {
            background: #f9fb9c;
            padding: 5px;
            border-radius: 20px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <h2>Posts</h2>
    <hr>


    @foreach ($posts as $post)
        <h2>{{ $post->title }} <span class="badge-count">{{ $post->total_view }}</span></h2>
        <div>
            {!! $post->description !!}
        </div>
        <a href="{{ route('posts.show', $post->id) }}">View More...</a>
    @endforeach


</body>
</html>