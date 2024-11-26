<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registre</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        rel="stylesheet" />
    <style>
        body {

            background-color: #5faecc;
        }

        .center_div {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 0;
        }

        .form-label{
            
            margin-bottom: 10px;
            border-radius: 5px;
        }

        label{
            font-weight: bold;
            font-size: 16px;
            text-align: center;
        }

        input{
            width: 100%;
            padding: 5px 5px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="center_div">
        <div class="w-75">
                <div class="container ">
                    <div class="row justify-content-center card-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                <div class="text-center"><img src="/assets//img/logo.jpeg" width="100" height="50"></div>
                                    <h2 class="text-center mt-2">Register User</h2>
                                </div>
                                <div class="card-body">
                                    <form id="loginForm" method="post" action="../controllers/nuevo_usuario.php">
                                <div class="mb-3">

                                        <label for="name">Name:</label><br>
                                        <input type="text" id="nombre" name="nombre" require class="form-label"><br>
                                        <label for="name">Id SAP:</label><br>
                                        <input type="text" id="id_sap" name="id_sap" require class="form-label"><br>
                                        <label for="email">Email:</label><br>
                                        <input type="email" id="correo" name="correo" require class="form-label"><br>
                                        <label for="name">Ciudad:</label><br>
                                        <input type="text" id="ciudad" name="ciudad" require class="form-label"><br>
                                    </div>
                                        <div class="d-grid">
                                        <button type="submit" value="registro_usuario" id="registro_usuario" class="btn btn-outline-success">Register User Name</button>
                                    </div>   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</body>

</html>