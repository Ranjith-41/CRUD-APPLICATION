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
                        <button class="btn btn-success"><a href="add.php" class="text-light">ADD</a></button>

                        <br>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">NAME</th>
                                <th scope="col">DEPARTMENT</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con=mysqli_connect("localhost","root","","employee");

                                $sql="SELECT * FROM details";
                                $c=mysqli_query($con,$sql);
                                $id=1;

                                while($row=mysqli_fetch_array($c))
                                {
                                    $id=$row['ID']??'';
                                    $name=$row['NAME']??'';
                                    $dept=$row['DEPARTMENT']??'';
                                    $phone=$row['PHONE']??'';
                            
                                ?>
                               
                               <tr>
                               <td><?php echo $id ?> </td>
                                <td><?php echo $name ?> </td>
                                <td><?php echo $dept ?> </td>
                                <td><?php echo $phone ?> </td>

                                <td>

                                <button type="button" class="btn btn-warning"><a href="\employee\edit.php?edit=<?php echo $id?>" class="text-light">EDIT</a></button>
                                <button type="button" class="btn btn-danger"><a href="\employee\delete.php?edit=<?php echo $id?>" class="text-light">DELETE</a></button>
                                
                                </td>

                               </tr>
                               <?php $id++; } ?>




                                
                            </tbody>
                        </table>
                            
                    </div>
                      
                    
                </div>
            </div>
            
            
        


        </div>
    </div>
    
</body>
</html>