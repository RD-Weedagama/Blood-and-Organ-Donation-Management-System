<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>reg6</title>
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
            <td class="col-form-label"><p>Do you know that people of following categories should not give blood? </p>
                 <ul>
                    <li>If you were found to be positive for HIV,Hepatitis B,C or Syphilis infections at any time</li>
                    <li>If you have had multiple sexual partners</li>
                    <li>If you have ever engaged in male to male sexual activity</li>
                    <li>If you have ever injected any drug (esp.Narcotics) not prescribed by a qualified medical practitioner</li>
                    <li>If you have ever worked as a commercial sex worker</li>
                    <li>If you have had sex with a commercial sex worker or an unknown partner during last 1 year</li>
                    <li>If you suspect that you or your partner may have got HIV or any other sexually transmitted infection</li>
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
            <td class="col-form-label">Do you or your sexual belong to one of the above categories?</td>
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
            <td class="col-form-label">Are you having persistent fever, diarrhoea, multiple swollen lymph nodes or unintentional weight loss?</td>
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
  </body>
</html>