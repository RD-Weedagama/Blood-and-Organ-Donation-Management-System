<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Agreement</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
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
    height: 560px;
    background: rgba(255, 255, 255, 0.575);
    color: rgba(255, 255, 255, 0.753);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 30px;   
    font-weight: 600;
    
}



            
    </style>
  </head>
  <body>


    
    <div class="login-box">
        
       <form action="controllerUserData.php" method="POST">
      
        <table class="table table-hover">
           
          <tr>
            
            <td colspan="4" class=" col-form-label"><p>Donor's Declaration</p>
                 <ul>
                    <li>I have read and understand the information regarding blood donation and answered all the above
                         questions honestly and correctly and donating my blood voluntarily today,for the benefit of 
                         patients.</li>
                    <li>I also agree to follow the instructions given to me by the NBTS,during and after blood donation
                         and accept the responsibility of any consequences of not following those instructions.</li>
                    <li>Further,I give my consent to test my donated blood for HIV,Syphilis,Hepatitis B & C, Malaria
                         and any other required test in any manner deemed appropriate by the NBTS Sri Lanka.</li>
                    <li>Further,I give my consent to be informed about the results of the above tests,as and when
                         required by the NBTS and also to follow any instructions given to me in this regard by the NBTS.</li>
                    <li>I accept that,involving in intentionally spreading an infection is an offence according to the 
                        sentences 262 and 263of the penal code.</li>
                 </ul>
            </td>
           
          </tr>

          <tr>
              
              <td class="col-form-label" colspan="3"><p>I AM WILLING TO BE A REGULAR BLOOD DONOR TO SAVE MANY MORE HUMAN LIVES THROUGH DONATING BLOOD </p>
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="timeA"  value="Once in a 4 months" required>
                <label class="form-check-label">
                  Once in a 4 months
                </label>
                <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="timeA"  value="Once in a 6 months" required>
                <label class="form-check-label">
                Once in a 6 months
                </label>
                <div class="form-check-inline">
                <input class="form-check-input" type="radio" name
                    `````````````````````   ```````````="timeA"  value="Once a year" required>
                <label class="form-check-label">
                Once a year
                </label>   
            </tr>
         
        
      </table> 
      <div class="text-end">
      <input type="submit" class="btn btn-dark" value="submit" name="agreement">
</div>
       </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>