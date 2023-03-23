<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table th,
        table td {
            vertical-align: middle
        }
    </style>
</head>
<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Trshed Posts</h1>

            <a href="{{ route('posts.index') }}" class="btn btn-dark btn-sm">All Post</a>
        </div>

        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Deleted At</th>
                <th>Actions</th>
            </tr>

            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->deleted_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-success btn-sm"> <i class="fas fa-undo"></i> </a>

                    <form class="d-inline delete-form" action="{{ route('posts.forcedelete', $post->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>

</body>
</html>
