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

<script>
    $(document).ready(function () {
        $("#find").click(function () {
            //Clear Existing Details
            $("#error").html("");
            $("#gender").html("");
            $("#year").html("");
            $("#month").html("");
            $("#day").html("");

            var NICNo = $("#nic").val();
            var dayText = 0;
            var year = "";
            var month = "";
            var day = "";
            var gender = "";
            var age = "";
            
            if (NICNo.length != 10 && NICNo.length != 12) {
                $("#error").html("Invalid NIC NO");
               <?php  echo "error";?>
            } else if (NICNo.length == 10 && !$.isNumeric(NICNo.substr(0, 9))) {
                $("#error").html("Invalid NIC NO");
            }
            else {
                // Year
                if (NICNo.length == 10) {
                    year = "19" + NICNo.substr(0, 2);
                    dayText = parseInt(NICNo.substr(2, 3));
                } else {
                    year = NICNo.substr(0, 4);
                    dayText = parseInt(NICNo.substr(4, 3));
                   
                }

                // Gender
                if (dayText > 500) {
                    gender = "Female";
                    dayText = dayText - 500;
                } else {
                    gender = "Male";
                }

                // Day Digit Validation
                if (dayText < 1 && dayText > 366) {
                    $("#error").html("Invalid NIC NO");
                } else {

                    //Month
                    if (dayText > 335) {
                        day = dayText - 335;
                        month = "12";
                    }
                    else if (dayText > 305) {
                        day = dayText - 305;
                        month = "11";
                    }
                    else if (dayText > 274) {
                        day = dayText - 274;
                        month = "10";
                    }
                    else if (dayText > 244) {
                        day = dayText - 244;
                        month = "09";
                    }
                    else if (dayText > 213) {
                        day = dayText - 213;
                        month = "08";
                    }
                    else if (dayText > 182) {
                        day = dayText - 182;
                        month = "07";
                    }
                    else if (dayText > 152) {
                        day = dayText - 152;
                        month = "06";
                    }
                    else if (dayText > 121) {
                        day = dayText - 121;
                        month = "05";
                    }
                    else if (dayText > 91) {
                        day = dayText - 91;
                        month = "04";
                    }
                    else if (dayText > 60) {
                        day = dayText - 60;
                        month = "03";
                    }
                    else if (dayText < 32) {
                        month = "01";
                        day = dayText;
                    }
                    else if (dayText > 31) {
                        day = dayText - 31;
                        month = "02";
                    }



                    // Show Details
                    $("#gender").val(gender);
                    
                    
                    Date.parse( $("#year").val( year+ "-"+ month+"-"+day));
                    

                    var today = new Date();
                    var yyyy = today.getFullYear();

                    today = yyyy-year;
                    $("#age").val(today);
                   
                }
            }
            
           


        });
    });
</script>
  </head>
  <body>

 
    
    <div class="login-box">
       <form action="controllerOrganDonorData.php" method="POST" autocomplete="off" enctype="multipart/form-data">
      
       
        <table class="table table-hover">
        <tr >
                
        <td colspan="4"><h3> <b> Personal Details</b></h3></td>



                
              </tr>

              <tr>
                <th >A)</th>
                <td class="col-form-label"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="ජාතික හැදුනුම්පත් අංකය">National Identity Card No</td>
                
                <td colspan="1" class="align-items-lg-start">
                    <div class="form-group in">
                        <input type="text" class="form-control"  id="nic" name="nic" required>
                    </div>
                    <td>
                    <input type="submit" id="find"  class="btn btn-dark" value="Add">

                    </td>
                
              </tr>

              <tr>
                <th >B)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ස්ත්‍රී/පුරුශ බාවය">Gender</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        
                        <input type="text" class="form-control"  id="gender" name="gender"  required>
                    </div> 
                    
              </tr>

              <tr>
                <th >C)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="උපන්දිනය">Date of Birth</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                    <input type="text" class="form-control"  id="year" name="dob"  required>
                   
       
                    </div>
                    
              </tr>

              <tr>
                <th >D)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="වයස">Age</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                    <input type="text" class="form-control" id="age" name="" >                   
                   </div>
                    
              </tr>

    
              




              <tr>
                <th >E)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ලිපිනය">Address</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="address" required> 
                    </div>
                    <td></td>
                    
              </tr>

             

              <tr>
                <th >F)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="දුරකතන අංකය ">Contact No</td>
                <td colspan="2" class="col-form-label">
                    <div class="form-group">
                        <input type="text" class="form-control"  maxlength="10" name="contact_no" required>
                    </div>
                    
              </tr>

              <tr>
                <th >G)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="රුධිර වර්ගය">Blood Group</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        
                        <select class="form-select " aria-label="Default select example" name="blood_group" required>
                            
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
                    
              </tr>

             

              <tr>
                <th >H)</th>
                <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="">Image of National Identity Card</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                    <input class="form-control " type="file" name="image" required>
                      </div>
                    
              </tr>
              
          </table> 
          <div class="text-end">
          <input type="submit" class="btn btn-dark" value="Next" name="personal">
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