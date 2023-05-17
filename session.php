<?php 

    if($_POST){ 

        if( ( $_POST['user']=="Mestrella" ) && ( $_POST['password']=="123456" ) ) {

           header("location:index.php");
        }
        else{
            echo "<script> alert('User or password incorrect'); </script>";
        }
}

?>


<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  
<div class="container"> <!-- esta es la clase bs-5 grid container -->
    <div class="row justify-content-center align-items-center g-2"> <!-- clase bs-5 grid row-->  
                <!-- Aqui dividmos la pantalla de 12 en 3 divis, y llenamos con el segundo para centrar el formulario-->
                    <div class="col-md-4">

                    </div>
                    <!--Segundo divi con forumlario dentro-->
                    <div class="col-md-4">
                        <div class="card">
                                    <div class="card-header">
                                        Login Page
                                    </div>          
                        
                                    <div class="card-body">
                                        <form action="session.php" method="post">
                                                User: <input class="form-control" type="text" name="user" id="">
                                                <br/>
                                                Password: <input class="form-control" type="text" name="password" id="">
                                                <br/>
                                                <button class="btn btn-success" type="submit">See Portfolio</button>            
                                        </form>
                                    </div>
                        <div class="card-footer text-muted">
                    </div>
    </div>  
</div>
        <!-- tercer divi columna 3-->
        <div class="col-md-4">
        </div>
</div>
    

  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>