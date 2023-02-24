<?php require_once('connection.php'); ?>
<?php 
    
	$query = "SELECT name,email, gender FROM usertable";

	$result_set = mysqli_query($con, $query);
    if($result_set){
        echo mysqli_num_rows($result_set). "Records found.";

       while ($record= mysqli_fetch_assoc($result_set)){
           $r=$record['name'];
           $d=$record['email'];
           
           

       }
        
    }

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select Query</title>
	
</head>
<body>
	<form action="">
        <label for=""> <?php echo $r ?></label>
       <input type="text" value="<?php echo $d ?>">
    </form>
</body>
</html>
<?php mysqli_close($con); ?>