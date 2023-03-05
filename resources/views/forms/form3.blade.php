<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
{{--
        @dump($errors)
        @dump($errors->any()) --}}

        {{-- @include('forms.errors') --}}

        <form action="{{ route('form3_data') }}" method="post">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                {{-- if($errors->has('name')) --}}
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" />
                {{-- Inline Error --}}
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror" >
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Age</label>
                <input type="text" name="age" placeholder="Age" class="form-control @error('age') is-invalid @enderror" />
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Gender</label> <br>
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                @error('gender')
                    <br> <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Education Level</label>
                <select class="form-select @error('education') is-invalid @enderror" name="education">
                    <option value=""> -- Select -- </option>
                    <option value="Diplome">Diplome</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Master">Master</option>
                    <option value="pHD">pHD</option>
                </select>
                @error('education')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Bio</label>
                <textarea name="bio" placeholder="Bio" class="form-control @error('bio') is-invalid @enderror" rows="5"></textarea>
                @error('bio')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-primary px-5">Send</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
