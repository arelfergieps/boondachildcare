<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-image: url('assets/imgs/pattrenn.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 100px;
        }
        .login-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .alert {
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .login-container {
                width: 90%; /* Membuat kontainer lebih kecil pada layar yang lebih kecil */
            }
        }
    </style>
</head>
<body>
    <div class="container py-5 d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container w-50">
            <h1 class="login-title">Login</h1>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul> 
                    @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>          
            </div>
            @endif
            <form action="{{url('/addlogin')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </form>
        </div> 
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3N5OB/aQ2qNH8yVWl6wSffrphvmj1JQ4V7yyjRaIxBXJscuOc2+E4p4lP8p4w5P" crossorigin="anonymous"></script>
</body>
</html>
