<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Add New Post</h1>

            <a href="{{ route('posts.index') }}" class="btn btn-dark btn-sm">All Posts</a>
        </div>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Ttile</label>
                <input type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror " name="title" value="{{ old('title') }}" />
                @error('title')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"/>
                @error('image')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Content</label>
                <textarea placeholder="content" rows="5" class="form-control @error('content') is-invalid @enderror" name="content">{{ old('content') }}</textarea>
                @error('content')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-success"> <i class="fas fa-save"></i> Save</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
