<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Blood Donation Form 6</title>
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
       <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination  justify-content-center ">
                  <li class="page-item"><a class="page-link" href="reg1.html">1</a></li>
                  <li class="page-item"><a class="page-link" href="reg2.html">2</a></li>
                  <li class="page-item"><a class="page-link" href="reg3.html">3</a></li>
                  <li class="page-item"><a class="page-link" href="reg4.html">4</a></li>
                  <li class="page-item"><a class="page-link" href="reg5.html">5</a></li>
                  <li class="page-item active"><a class="page-link" href="#">6</a></li>
                </ul>
              </nav>
          </div>
        <table class="table table-hover">
           
          <tr>
            <th >A)</th>
            <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="පහත දැක්වෙන කවර හෝ කාණ්ඩයකට ඔබ අයත් වේ නම් ලේ දන්දීම සුදුසු නො වන බව දන්නෙහි ද?"><p>Do you know that people of following categories should not give blood? </p>
                 <ul>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ ඒඩ්ස් (HIV/AIDS) හෝ සෙංගමාල(Hepatitis B/C) ආසාදනයකට ලක් වූවකු නම්">If you were found to be positive for HIV,Hepatitis B,C or Syphilis infections at any time</li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබේ ලිංගික සබදතා එක් අයෙකුට  සීමා වි නොමැති නම්">If you have had multiple sexual partners</li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ වෙනත් පිරිමියෙකු සමග සමලිංගික ඇසුරක යෙදී ඇති පිරිමියෙකු නම්">If you have ever engaged in male to male sexual activity</li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ කෙදිනක හෝ මත්ද්‍රව්‍යයන් ශරීරයට එන්නත් කොට ගෙන තිබේ නම්">If you have ever injected any drug (esp.Narcotics) not prescribed by a qualified medical practitioner</li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ කෙදිනක හෝ ගණිකා වෘත්තීයෙහි යෙදී තිබේ නම්">If you have ever worked as a commercial sex worker</li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ පසුගිය මාස 12 තුළ කෙදිනක හෝ ගණිකා ඇසුරක යෙදී තිබේ නම්">If you have had sex with a commercial sex worker or an unknown partner during last 1 year</li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබට හෝ ඔබේ සහකරු/සහකාරියට ඒඩ්ස්(HIV/AIDS)හෝ වෙනත් ලිංගික රෝග ආසාදනයක් තිබේදැයි සැකයක් ඇත්නම්,">If you suspect that you or your partner may have got HIV or any other sexually transmitted infection</li>
                 </ul>
            </td>
            <td><div class="form-check">
                <input class="form-check-input" type="radio" name="A6"  value="yes" required>
                <label class="form-check-label">
                  Yes
                </label>
              </div></td>
              <td><div class="form-check">
                <input class="form-check-input" type="radio" name="A6"  value="no" required>
                <label class="form-check-label">
                  No
                </label>
              </div></td>

          </tr>

          <tr>
            <th >B)</th>
            <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ හෝ ඔබේ සහකරු/සහකාරිය ඉහත සදහන් කවර හෝ කාණ්ඩයකට අයත්වේද">Do you or your sexual belong to one of the above categories?</td>
            <td><div class="form-check">
                <input class="form-check-input" type="radio" name="B6"  value="yes" required>
                <label class="form-check-label">
                  Yes
                </label>
              </div></td>
            <td><div class="form-check">
                <input class="form-check-input" type="radio" name="B6"  value="no" required>
                <label class="form-check-label">
                  No
                </label>
              </div></td>
          </tr>

          <tr>
            <th >C)</th>
            <td class="col-form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ඔබ,සිරුරේ බර අඩුවීමකින්,කුද්දැටි (වසා ග්‍රන්ථි) ඉදිමීමකින්,කල් පවත්නා උණකින් හෝ පාචනයෙන් පෙළේ ද">Are you having persistent fever, diarrhoea, multiple swollen lymph nodes or unintentional weight loss?</td>
            <td><div class="form-check">
                <input class="form-check-input" type="radio" name="C6"  value="yes" required>
                <label class="form-check-label">
                  Yes
                </label>
              </div></td>
            <td><div class="form-check">
                <input class="form-check-input" type="radio" name="C6"  value="no" required>
                <label class="form-check-label">
                  No
                </label>
              </div></td>
          </tr>
        
      </table> 
      <div class="text-end">
      <input type="submit" class="btn btn-dark" value="next" name="submit6">
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