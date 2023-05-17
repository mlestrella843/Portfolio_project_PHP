<?php  include('header.php');  ?>

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
                    <form action="portfolio.php" method="post">
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>3</td>
                            <td>Web Application</td>
                            <td>image.jpg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    <!----------->            
        </div>      
    </div>
</div>



<?php include('footer.php');  ?>