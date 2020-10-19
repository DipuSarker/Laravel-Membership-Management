<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts | Membership Management</title>

    
    <style>
        .form{
            padding: 5%;
            border: 1px solid #eee;
        }
    </style>
</head>
<body>
    <h2>Posts</h2>
    <hr>

{{-- 
    <form action="{{ route('posts.store') }}" method="POST" class="form">
        @csrf 
        <label>Title</label> <br />
        <input type="text" name="title" placeholder="Title"/> <br />

        <label>Description</label> <br />
        <textarea name="description" placeholder="Description" cols="90" rows="5"></textarea> <br />

        <button type="submit">Submit</button>
    </form> --}}

    <form action="{{ route ('posts.store') }}" method="POST" class="form">
        @csrf

        <label>Title</label><br/>
        <input type="text" name="title" placeholder="Title"><br/>

        <label>Description</label><br/>
        <textarea name="description" placeholder="Description" cols="30" rows="10"></textarea><br/>

        <button type="submit">Submit</button>

    </form>


    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>

        <div>
            {!! $post->description !!}
        </div>

        <a href="{{ route('posts.show', $post->slug) }}">View More...</a>
    @endforeach





</body>
</html>