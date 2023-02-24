
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>reg1</title>
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
                <ul class="pagination  justify-content-center">
                 
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="reg2.php">2</a></li>
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
              <td class="col-form-label">Have you donated blood before?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="A"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="A"  value="no" required>
                  <label class="form-check-label" >
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >B)</th>
              <td class="col-form-label">If yes,How many times</td>
              <td colspan="2" class="align-items-lg-start">
                <div class="form-group">
                  <input type="text" class="form-control" name="B" required>
              </div>
                  
            </tr>

            <tr>
              <th >C)</th>
              <td class="col-form-label">Date of last donation</td>
              <td colspan="2" class="align-items-lg-start">
                <div class="form-group">
                  <input type="date" class="form-control" name="C" required>
              </div>
                  
            </tr>

            <tr>
              <th >D)</th>
              <td class="col-form-label">Did you experience any aliment, difficulty or discomfort during previous donations?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="D"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="D"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >E)</th>
              <td class="col-form-label">If yes what was the difficulty?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="E"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="E"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >F)</th>
              <td class="col-form-label">Have you ever been medically advised not to donate blood?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="F"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="F"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >G)</th>
              <td class="col-form-label">Have you read and understand the “Blood donors Information Leaflets” given to you?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="G"  value="yes" required>
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="G"  value="no" required>
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            
          
            
        </table> 
        <div  class="text-end">
        <input type="submit" class="btn btn-dark" value="Next" name="submit">


        </div>
       </form>
         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>