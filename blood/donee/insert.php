<?php
 
        
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $E = $_POST['E'];
        $F = $_POST['F'];
        $G = $_POST['G'];
        

        if(!empty($A) || !empty($B) || !empty($C) || !empty($D) ||
        !empty($E) || !empty($F) || !empty($G)){

        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "userform";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else {
           
            $Insert = "INSERT INTO test(A, B, C, D, E, F, G) values(?, ?, ?, ?, ?, ?,?)";

            

            
                

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssss",$A, $B, $C, $D, $E, $F,$G,$email);
                $stmt->execute();
                    echo "New record inserted sucessfully.";
               
            
            $stmt->close();
            $conn->close(); 
        }
    }
    else {
        echo "All field are required.";
        die();
    }

?>