<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/styles/index.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<style>
    * {
        font-family: Inter;
    }
</style>

<body class="bg-light">

    <div class="container py-5 d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="col-8 col-md-4">

            <h3 class="fw-bold text-center mb-5">Register</h3>

            <form method="POST" action="#">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button class="btn btn-dark w-100 mt-2">Create Account</button>

                <p class="text-center mt-3 fs-vs">
                    Sudah punya akun? <a href="/login">Login</a>
                </p>
            </form>

        </div>
    </div>

</body>

</html>
