<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>reg4</title>
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

        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination  justify-content-center ">
                 
                  <li class="page-item"><a class="page-link" href="reg1.html">1</a></li>
                  <li class="page-item"><a class="page-link" href="reg2.html">2</a></li>
                  <li class="page-item"><a class="page-link" href="reg3.html">3</a></li>
                  <li class="page-item active"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="reg5.html">5</a></li>
                  <li class="page-item"><a class="page-link" href="reg6.html">6</a></li>
                </ul>
              </nav>
          </div>

          <form action="controllerUserData.php" method="POST">
            <table class="table table-hover">
            
              <tr>
                <th >A)</th>
                <td class="col-form-label">Have you received any vaccination?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="A4"  value="yes"required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="A4"  value="no" required>
                    <label class="form-check-label">
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >D)</th>
                <td class="col-form-label">Have you had tattooing, ear/body piercing or acupuncture treatment?      </td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="B4"  value="yes" required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="B4"  value="no" required>
                    <label class="form-check-label">
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >A)</th>
                <td class="col-form-label">Have you been imprisoned for any reason?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="C4"  value="yes" required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="C4"  value="no" required>
                    <label class="form-check-label" >
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >D)</th>
                <td class="col-form-label">Have you or your partner travelled aboard?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="D4"  value="yes" required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="D4"  value="no" required>
                    <label class="form-check-label">
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >A)</th>
                <td class="col-form-label">Have you or your partner received blood or blood products?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="E4"  value="yes" required>
                    <label class="form-check-label" >
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="E4"  value="no" required>
                    <label class="form-check-label" >
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >D)</th>
                <td class="col-form-label">Have you had malaria or taken treatment for malaria?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="F4"  value="yes" required>
                    <label class="form-check-label" >
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="F4"  value="no" required>
                    <label class="form-check-label" >
                      No
                    </label>
                  </div></td>
              </tr>
           
          </table> 
          <div class="text-end">
          <input type="submit" class="btn btn-dark" value="Next" name="submit4">
</div>
          </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>