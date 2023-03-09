<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h2>Contact Us</h2>
        <form method="POST" action="{{ route('contact_data') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label>Send To</label>
                        <select name="send_to" class="form-select">
                            <option value="abedalrhman882001@gmail.com">Support</option>
                            <option value="sales@example.com">Sales</option>
                            <option value="customer@example.com">Customer</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label>CV</label>
                <input type="file" class="form-control" name="cv" />
            </div>

            <div class="mb-4">
                <label>Message</label>
                <textarea class="form-control" rows="5" name="message"></textarea>
            </div>

            <button class="btn btn-success">Send</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
