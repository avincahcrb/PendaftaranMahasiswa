<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top: 20.6%;">
        <div class="card col-md-6 position-relative top-50 start-50 translate-middle">
            <div class="card-body">
                <h4 class="card-title text-center">Login</h4>
                <div class="grup">
                    <label for="" class="text">Username</label>
                    <input type="text" class="form-control mt-3" placeholder="Masukan Username">
                </div>
                <div class="grup">
                    <label for="" class="text  mt-3">Username</label>
                    <input type="text" class="form-control  mt-3" placeholder="Masukan Username">
                </div>
                <a href="../index.php" class="btn btn-outline-info form-control  mt-3">Login</a>
                <p class="text-center"><b>or</b></p>
                <a href="/login/register.php" class="btn btn-outline-info form-control">Registrasi</a>
            </div>
        </div>
    </div>
    <?php
    include '../footer.php';
    ?>
</body>

</html>