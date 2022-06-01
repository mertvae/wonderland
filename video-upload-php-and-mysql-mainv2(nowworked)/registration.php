<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Registration</h1>
                <form action="validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Enter login"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"><br>
                <input type="text" class="form-control" name="password" id="password" placeholder="Enter password"><br>
                <button  class="btn btn-dark">Register</button><br>
        

            </div>
            <div class="col">
                <h1>Log in</h1>
                <form action="validation-form/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Enter login"><br>
                <input type="text" class="form-control" name="password" id="password" placeholder="Enter password"><br>
                <button  class="btn btn-dark">Authorization</button><br>
        

            </div>
        </div>
    </div>
</body>
</html> 