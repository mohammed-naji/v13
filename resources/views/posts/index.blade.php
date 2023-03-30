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

        {{-- <i class="fas fa-heart"></i>
        <i class="far fa-heart"></i>
        <i class="fab fa-facebook"></i> --}}

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All Posts</h1>

            <a href="{{ route('posts.create') }}" class="btn btn-dark btn-sm">Add New Post</a>
        </div>

        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('msg') }}
            </div>
        @endif

        <div class="message-wrapper"></div>


        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Actions</th>
            </tr>

            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <img width="80" src="{{ asset('uploads/posts/'.$post->image) }}" alt="">
                </td>
                <td>{{ $post->created_at->format('d F, Y') }}</td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm"> <i class="fas fa-eye"></i> </a>

                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>

                    {{-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a> --}}

                    <form class="d-inline delete-form" action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        {{-- <input type="hidden" name="_method" value="delete"> --}}

                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>

        {{ $posts->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <script>

        // Vanilla JS
        // const xhttp = new XMLHttpRequest();
        // xhttp.onload = function() {
        //     document.getElementById("demo").innerHTML = this.responseText;
        // }
        // xhttp.open("GET", "ajax_info.txt", true);
        // xhttp.send();


        // Jquery
        $('.delete-form').click(function(e) {
            e.preventDefault()

            let delurl = $(this).attr('action');
            // let data = new formData();
            let formdata = $(this).serialize();
            let form = $(this);

            // console.log(formdata);

            // if( prompt('Please enter password') == 123 ) {
            if( confirm('Are you sure?!') ) {
                $.ajax({
                    url: delurl, // action
                    type: 'post', // method
                    data: formdata,
                    success: function() { // request done successfully
                        // form.parent().parent().remove()
                        form.parents('tr').remove()

                        let msg = `
            <div class="alert alert-danger">
                Post Deleted Successfully
            </div>`

                        $('.message-wrapper').html(msg);
                    },
                    error: function() { // failed in request

                    }
                })
            }

        })


        // FetchAPI



        // Axios

    </script>

</body>
</html>
