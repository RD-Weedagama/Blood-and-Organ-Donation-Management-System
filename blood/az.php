<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>How to make Search box & filter data in HTML Table from Database in PHP MySQL </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" class="form-control" placeholder="Search data">
                                        <button type="submit" name="ser" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>address</th>
                                    <th>blood_group</th>
                                    <th>contact_no</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $link = mysqli_connect("localhost", "root", "", "userform");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }

                                    if(isset($_GET['ser']))
                                    {
                                        $search = $_POST['search'];
                                        $sql = "SELECT * FROM usertable WHERE blood_group='$search'";
                                       
                                        if($result = mysqli_query($link,$sql)){
                                            if(mysqli_num_rows($result) > 0)
                                            {
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><?= $row['address']; ?></td>
                                                        <td><?= $row['blood_group']; ?></td>
                                                        <td><?= $row['contact_no']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                
                                                
                                            }
                                            else
                                            {
                                                ?>
                                                    <tr>
                                                        <td colspan="4">No Record Found</td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                        }
                                       

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>