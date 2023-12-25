<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<body>
  <div class="container mt-5 py-3 bg-dark-subtle">
    <div class="row justify-content-center ">
        <div class="col-4">
            <h4 class="mb-3 "> Wutyi Aung (Web Developer)</h4>

            <?php if(isset($_GET['error'])) :?>
              <div class="alert alert-warning">
                can not upload file
              </div>
            <?php endif ?>
            
            <?php if(file_exists("_actions/photos/profile.jpg")) :?>
                <img src="_actions/photos/profile.jpg" alt="" class="img-thumbnail mb-3" width="150">
            <?php endif ?>

            <form action="_actions/upload.php" enctype="multipart/form-data" method="POST">
                <div class="input-group mb-3">
                    <input type="file" name="photo" id="" class="form-control">
                     <button class="btn btn-primary ">Upload</button>
                </div>
            </form>

            <ul class="list-group">
                <li class="list-group-item">Email : wutyiaung132@gmail.com</li>
                <li class="list-group-item"> Phone : 09694140842</li>
                <li class="list-group-item"> Address : Pyay</li>
                <li class="list-group-item">
                <i class="fab fa-github"></i>
                 <a href="https://github.com/WutyiAung">
                    https://github.com/WutyiAung
                </a>
                </li>
            </ul>
            <a href="_actions/logout.php" class="float-end">Logout</a>


        </div>
    </div>
  </div>
    
</body>
</html>