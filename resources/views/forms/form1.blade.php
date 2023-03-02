<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <h1>Basic Form</h1>

        {{-- <p>Mohammed</p> --}}
        <!-- <p>Mohammed</p> -->

        <form method="post" action="{{ route('form1_data') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" > --}}
            {{-- {{ csrf_field() }} --}}
            @csrf

            <div class="mb-3 row align-items-center">
                <div class="col-1">
                    <label>Name</label>
                </div>
                <div class="col-11">
                    <input type="text" placeholder="Name" class="form-control" name="name" />
                </div>

            </div>

            <button class="btn btn-primary">Send</button>
            {{-- <button class="btn btn-success">Send</button>
            <button class="btn btn-info">Send</button>
            <button class="btn btn-warning">Send</button>
            <button class="btn btn-danger">Send</button>
            <button class="btn btn-dark">Send</button>
            <button class="btn btn-secondary">Send</button> --}}
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
