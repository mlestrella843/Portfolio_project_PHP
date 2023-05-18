<?php include('header.php');?>
<?php include('connection.php');?>
<?php
// Aqui se reciben los datos del formulario
//Ademas de instancia una conexion, se crea una instruccion sql tipo INSERT y se ejecuta.
if($_POST){    
    print_r($_POST);
    $nameProject = $_POST['nameProject'];
    $objConnection=new connection();
    $sql="INSERT INTO `proyectos` (`id`, `name`, `image`, `description`) VALUES (NULL, '$nameProject', 'application.jpg', 'This is a first Application');";  
    $objConnection->ejecutar($sql);
}

if($_GET){
    //instanciamos una conexion.
    $objConnection=new connection();
    $id=$_GET['delete'];
    $sql="DELETE FROM proyectos WHERE `proyectos`.`id`=".$id;
    $objConnection->ejecutar($sql);
}

    $objConnection=new connection();
    $projects = $objConnection->consult("SELECT * FROM `proyectos`");
    //print_r($projects);
?>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <!----------->                      
          <div class="card">
                <div class="card-header">
                    Project Information
                </div>
                <div class="card-body">          
                    <form action="portfolio.php" method="post" enctype="multipart/form-data">
                        <!-- nameproject es el nombre que entro por teclado, y que se guarda en la columna name de la base de datos-->
                        Name of project: <input class="form-control" type="text" name="nameProject" id=""> 
                        <br/>
                        Image of project: <input class="form-control" type="file" name="file" id="">
                        <br/>
                        <input class="btn btn-success" type="submit" value="Send project">
                    </form>
                </div>  
            </div>
        <!-------->
        </div>
      
        <div class="col-md-6">
     <!----------->                        
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Descripcion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($projects as $project) { ?>
                        <tr>
                            <td><?php echo $project['id']; ?></td>
                            <td><?php echo $project['name']; ?></td>
                            <td><?php echo $project['image']; ?></td>
                            <td><?php echo $project['description']; ?></td>
                            <td> <a class="btn btn-danger" href="?delete=<?php echo $project['id']; ?>">Delete</a></td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
    <!----------->            
        </div>      
    </div>
</div>

<?php include('footer.php');  ?>