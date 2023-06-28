<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                <h2>Login</h2>
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email" autofocus required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-dark">Log in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
