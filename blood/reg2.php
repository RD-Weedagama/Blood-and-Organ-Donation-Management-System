<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Blood Donation Form 2</title>
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
    font-weight: 700;
}



            
    </style>
  </head>
  <body>


    
    <div class="login-box">
        
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination  justify-content-center ">
                      
                      <li class="page-item"><a class="page-link" href="reg1.php">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="reg3.html">3</a></li>
                      <li class="page-item"><a class="page-link" href="reg4.html">4</a></li>
                      <li class="page-item"><a class="page-link" href="reg5.html">5</a></li>
                      <li class="page-item"><a class="page-link" href="reg6.html">6</a></li>
                    </ul>
                  </nav>
              </div>
       <form action="controllerUserData.php" method="POST">
       <table class="table table-hover">
            
            <tr>
              <th >A)</th>
              <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ දැනට හොද සොකය තත්වයකින් පසුවන්නේද? ">Are you feeling well, today?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="A2"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="A2"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            

            <tr>
              <th >B)</th>
              <td class="col-form-label" colspan="3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබට පහත දැක්වෙන කවර හෝ රෝගී තත්ත්වයක් වැලදී හෝ ඒ සදහා ප්‍රතිකාර ගෙන තිබේද? "><p>Have you ever had or taken treatment for any of the
                  following disease conditions? If Yes , please mark in relevant boxes and 
                  discuss with the medical officer during the interview. </p>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Heart Disease" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="හෘද රෝග">Heart Disease</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Diabetes" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" දියවැඩියාව "> Diabetes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Fits" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" වලිප්පුව">Fits</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Strokes" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="අන්ශබාගය "> Strokes     </label>
                    </div> 
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Asthma/Lung disease" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ඇදුම">Asthma/Lung disease</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Liver diseases" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="අක්මා රෝග ">Liver diseases</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Kidney diseases">
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="වකුගඩු රෝගය ">Kidney diseases   </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Blood disorders" >
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="රුධිර රෝග ">Blood disorders    </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="Cancer">
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="පිලිකා ">Cancer</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="B2[]" value="none">
                      <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ">None</label>
                    </div>         
            </tr>

            <tr>
              <th >C)</th>
              <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ දැනට කවර හෝ ඔශදයක්/ප්‍රතිකාරයක් ලබා ගන්නේද? ">Are you taking any medication/treatment, presently?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="C2"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="C2"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >D)</th>
              <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ">Have you undergone any surgery?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="D2"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="D2"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >E)</th>
              <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ඔබ දැනට කවර හෝ ඔශදයක්/ප්‍රතිකාරයක් ලබා ගන්නේද?">After donating blood, do you have to engage in any heavy work, driving passenger or <br> heavy vehicles or work at present? Have you</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="E2"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="E2"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >F)</th>
              <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ඔබ දැනට ගර්භණීව සිටීද?මව් කිරි දීමෙහි යෙදෙන්නේද? පසුගිය මාස 12 තුල දරු ප්‍රසූතියකට හෝ ගබ්සා වීමකට ලක් වූයේද?">(For females) Are you pregnant or breast feeding at present? Have you  had a child birth br on abortion during last 12 months?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="F2"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="F2"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            
          
          
        </table> 
        <div class="text-end">
        <input type="submit" class="btn btn-dark" value="Next" name="submit2">
        </div>
       </form>

         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
  })
	</script>
  
  </body>
</html>