<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark-subtle">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h3 class="text-center">Login</h3>
                <?php if(isset($_GET['incorrect'])) : ?>
                  <div class="alert alert-danger">
                    incorrect email or password
                  </div>
                <?php endif ?>

                <form action="_actions/login.php" method="post">
                    <input type="email" name="email" id="" placeholder="Email" class="my-2 form-control" required>
                    <input type="password" name="password" placeholder="password" class="my-2 form-control" required>
                    <button class="btn btn-primary form-control">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>