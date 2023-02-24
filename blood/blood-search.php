<?php session_start();
$loc_ema = "";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <style>
        body {
            color: #2e323c;
    background-image: url(b.jpg);
    position: relative;
   
    width: 100%;
    height:100vh;
    background-size: cover;
    z-index: -1;
}

.card {
    border: none;
    background: #eee
}

.search {
    width: 100%;
    margin-bottom: auto;
    margin-top: 20px;
    height: 50px;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px
}

.search-input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    margin-top: 5px;
    caret-color: transparent;
    line-height: 20px;
    transition: width 0.4s linear
}

.search .search-input {
    padding: 0 10px;
    width: 100%;
    caret-color: #536bf6;
    font-size: 19px;
    font-weight: 300;
    color: black;
    transition: width 0.4s linear
}

.search-icon {
    height: 34px;
    width: 34px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #536bf6;
    font-size: 10px;
    bottom: 30px;
    position: relative;
    border-radius: 5px
}

.search-icon:hover {
    color: #fff !important
}

a:link {
    text-decoration: none
}

.card-inner {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
    border: none;
    cursor: pointer;
    transition: all 2s
}

.card-inner:hover {
    transform: scale(1.1)
}

.mg-text span {
    font-size: 12px
}

.mg-text {
    line-height: 14px
}
    </style>
  </head>
  <body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search blood groups here</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="POST" id="my_form">
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
                  <form action="" method="POST">

                  <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>address</th>
                                    <th>blood_group</th>
                                    <th>contact_no</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                  <tbody>
                  <?php
                  
                    if(isset($_POST['ser']))
                    {
                        $link = mysqli_connect("localhost", "root", "", "userform");
 
                        // Check connection
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                         
                        // Attempt select query execution
                        $search = $_POST['search'];
                        $sql = "SELECT * FROM usertable WHERE blood_group='$search'";
                        if($result = mysqli_query($link,$sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                  
                                    
                                    

                                        ?>
                                                    <tr>
                                        
                                                        <td><?= $row['name']; ?></td>
                                                        <td><?= $row['address']; ?></td>
                                                        <td><?= $row['blood_group']; ?></td>
                                                        <td><?= $row['contact_no']; ?></td>
                                                        <td><form action=""><input type="submit" class="btn btn-dark" value="Find" name="sub"></form></td>
                                                        <td><?php  
                                   $address=$row['address'];
                                  
                                    $address = str_replace(" ", "+", $address);
       ?>

       <iframe width="100%" height="100" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

       <?php ?></td>


                                                    </tr>


                                                    <?php

                                    echo "</tr>";
                                }
                                echo "</table>";
                                // Close result set
                                mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                                
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                         
                        // Close connection
                        mysqli_close($link);}



                        


?>
                   </table>
                  </tbody>

                  </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>