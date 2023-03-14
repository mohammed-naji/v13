<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container my-5">

        {{-- <i class="fas fa-heart"></i>
        <i class="far fa-heart"></i>
        <i class="fab fa-facebook"></i> --}}

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All Posts</h1>

            <a href="" class="btn btn-dark btn-sm">Add New Post</a>
        </div>

        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Post 1</td>
                <td>image.pp</td>
                <td>10/10/2022</td>
                <td>10/10/2023</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                    <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Post 1</td>
                <td>image.pp</td>
                <td>10/10/2022</td>
                <td>10/10/2023</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                    <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Post 1</td>
                <td>image.pp</td>
                <td>10/10/2022</td>
                <td>10/10/2023</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                    <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                </td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
