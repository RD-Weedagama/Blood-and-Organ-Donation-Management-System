<?php require_once "controllerOrganDonorData.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Personal details</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(hand.jpg);
    background-size: cover;
    font-family: sans-serif;
   
    
    
}
.login-box{
    width: 1020px;
    height: 660px;
    background: rgba(255, 255, 255, 0.575);
    color: rgba(255, 255, 255, 0.753);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding:35px 30px 30px 30px;
    border-radius: 30px;  
    font-weight: 600;
    
    
    
    
}
            
    </style>

  </head>
  <body>

 
    
    <div class="login-box">
       <form action="controllerOrganDonorData.php" method="POST" autocomplete="off" enctype="multipart/form-data">
      
       
        <table class="table table-hover">
        <tr >
                
        <td colspan="4"><h3> <b> Personal Details</b></h3></td>


        </tr>

        <tr>
                <th >G)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="රුධිර වර්ගය">Organ Type</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        
                        <select class="form-select " aria-label="Default select example" name="otype" required>
                            
                            <option value="Kidney" >Kidney</option>
                            <option value="Eyes">Eyes</option>
                            <option value="Heart">Heart</option>
                          </select>
                      </div>
                </td>
                </tr>

              <tr>
                <th >G)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="රුධිර වර්ගය">Blood Group</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        
                        <select class="form-select " aria-label="Default select example" name="oblood" required>
                            
                            <option value="A+" >A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                          </select>
                      </div>
                </td>
                </tr>
              
          </table> 
          <div class="text-end">
          <input type="submit" class="btn btn-dark" value="Next" name="odetails">
</div>
       </form>

         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
  })
	</script>

</body>
</html>