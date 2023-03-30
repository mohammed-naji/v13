<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="container text-center my-5">
        <h1 class="mb-4">{{ $post->title }}</h1>
        <img class="w-75 mb-5" src="{{ asset('uploads/posts/'.$post->image) }}" alt="">

        <p>{{ $post->content }}</p>

        <hr>

        <h3>Comments ( {{ $post->comments->count() }} )</h3>

        @foreach ($post->comments as $comment)
            <div class="text-start w-50 mx-auto">
                <h4>{{ $comment->user->name }}</h4>
                <p>{{ $comment->comment }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
