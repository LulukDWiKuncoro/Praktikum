<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Customize CSS here */
        body {
            background-color: #f8f9fa;
        }
        .login-form {
            width: 300px;
            margin: 150px auto;
        }
    </style>
</head>
<body>

<div class="login-form">
    <h2 class="text-center mb-4">Login</h2>
    <form action="proses_login.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>