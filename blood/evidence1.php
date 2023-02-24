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
    height: 600px;
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
     

             

              <tr>
                
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Deponent 1</td>
                 
                    
              </tr>
              
              <tr>
                <th >A)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Name</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="name1" required> 
                    </div>
                    <td></td>
                    
              </tr>
              
    
              




              <tr>
                <th >B)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ලිපිනය">Address</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="address1" required> 
                    </div>
                    <td></td>
                    
              </tr>

              
              <tr>
                <th >C)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="">National Identity Card</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="nic1" required> 
                    </div>
                    <td></td>
                    
              </tr>

              <tr>
                <th >D)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Relationship</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="relationship1" required> 
                    </div>
                    <td></td>
                    
              </tr>

             

              <tr>
                <th >E)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="දුරකතන අංකය ">Contact No</td>
                <td colspan="2" class="col-form-label">
                    <div class="form-group">
                        <input type="text" class="form-control"  maxlength="10" name="contact_no1" required>
                    </div>
                    
              </tr>

              <tr>
                <th >F)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="  ">Email</td>
                <td colspan="2" class="col-form-label">
                    <div class="form-group">
                        <input type="text" class="form-control"  maxlength="10" name="email1" required>
                    </div>
                    
              </tr>

              

          </table> 
          <div class="text-end">
          <input type="submit" class="btn btn-dark" value="Next" name="evi1">
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