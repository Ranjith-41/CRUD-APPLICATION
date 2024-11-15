<?php

$name=$_POST['name']??'';
$dept=$_POST['dept']??'';
$phone=$_POST['phone']??'';
$con=mysqli_connect("localhost","root","","employee");
$sql="INSERT INTO details (NAME,DEPARTMENT,PHONE) VALUES ('$name','$dept','$phone')";
$r=mysqli_query($con,$sql);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEES CRUD APPLICATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9"> 
                <div class="card">
                    <div class="card-header">
                    EMPLOYEES
                    </div>
                
                    <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label>NAME</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name">
                        
                        </div>
                        <div class="mb-3">
                            <label>DEPARTMENT</label>
                            <input type="text" class="form-control" name="dept" placeholder="Enter the Department">
                        
                        </div>
                        <div class="mb-3">
                            <label>PHONE</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter the  Phone number">
                        
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                            <input type="submit" class="btn btn-success" name="submit" value="ADD">

                            </div>
                            <div class="col-md-3">
                            <button class="btn btn-secondary"><a  href="\employee\index.php" class="text-light">CANCEL</a></button>

                            </div>
                        
                       
                    </form>
                    </div>
                      
                    
                </div>
            </div>
            
            
        


        </div>
    </div>
    
</body>
</html>