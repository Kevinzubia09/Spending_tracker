<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
            <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="styles/styles.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col bg">
            
            </div>
            <div class="col">
                <div class="text-end">
                    <img src="" alt=""> 
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido a mi primera base de datos</h2>

                <form action="config/recovery.php" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
               
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Recuperar Password</button>
                    </div>
                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="form-insert-user.php">Registrate</a></span> <br>
                        

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>