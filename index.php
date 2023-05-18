<?php  include('header.php');  ?>
<?php include('connection.php');?>

<?php  
$objConnection=new connection();
$projects = $objConnection->consult("SELECT * FROM `proyectos`");
//print_r($projects);
?>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Welcome!</h1>
            <p class="lead">This is my Portfolio.</p>
            <hr class="my-2">
            <p>More info</p>    
        </div>
    </div>
  

   
<!-- this is a card that contains each project-->

<div class="row row-cols-1 row-cols-md-3 g-4">

   <?php foreach($projects as $project) { ?>

    <div class="col">
        <div class="card">
        <img src="Images/<?php echo $project['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $project['name']; ?></h5>
            <p class="card-text"><?php echo $project['description']; ?></p>
        </div>
        </div>
    </div>   
    
    <?php } ?>

</div>


    
<?php include('footer.php');  ?>