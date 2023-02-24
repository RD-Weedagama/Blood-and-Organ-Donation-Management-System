<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>covid-19</title>
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
                  <td colspan="4"><h3> <b> Blood donor statement to ensure blood and blood donor safety in the face of corona virus epidemic</b></h3></td>
              </tr>  
            
              <tr>
                <th >A)</th>
                <td class="col-form-label"> During the last month, do you had any symptoms such as fever, cough, and difficulty <br> in breathing?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donA"  value="yes"required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donA"  value="no" required>
                    <label class="form-check-label">
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >B)</th>
                <td class="col-form-label">At this moment,Is there anyone at your house suffering with fever, cough and deficulty <br> in breathing?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donB"  value="yes" required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donB"  value="no" required>
                    <label class="form-check-label">
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >C)</th>
                <td class="col-form-label">Have you went your friends' home the one who's went abroad within the last month?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donC"  value="yes" required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donC"  value="no" required>
                    <label class="form-check-label" >
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >D)</th>
                <td class="col-form-label">Have you had a close relationship with someone who came from abroad over the past month?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donD"  value="yes" required>
                    <label class="form-check-label">
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donD"  value="no" required>
                    <label class="form-check-label">
                      No
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >E)</th>
                <td class="col-form-label">Have you been abroad for the past three months?</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donE"  value="yes" required>
                    <label class="form-check-label" >
                      Yes
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="donE"  value="no" required>
                    <label class="form-check-label" >
                      No
                    </label>
                  </div></td>
              </tr>

              
          </table> 
          <div class="text-end">
          <input type="submit" class="btn btn-dark" value="Next" name="don">
</div>
          </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>