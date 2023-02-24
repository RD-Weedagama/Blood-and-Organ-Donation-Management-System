<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Personal details</title>
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
    padding: 10px 30px 10px 30px;
    border-radius: 30px;  
    font-weight: 600;
    
    
    
    
}



            
    </style>



  </head>
  <body>

 
    
    <div class="login-box">
       <form action="controllerUserData.php" method="POST" autocomplete="off">
        
       
        <table class="table table-hover">
        <tr>
                
        <td colspan="4"><h3> <b> Personal Details</b></h3></td>
                
              </tr>

              <tr>
                <th >A)</th>
                <td class="col-form-label">Gender</td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="gender"  value="Male" required>
                    <label class="form-check-label">
                      Male
                    </label>
                  </div></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="gender"  value="Female" required>
                    <label class="form-check-label">
                      Female
                    </label>
                  </div></td>
              </tr>

              <tr>
                <th >B)</th>
                <td class="col-form-label">National Id card No</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nic" required>
                    </div>
                    
              </tr>

              <tr>
                <th >C)</th>
                <td class="col-form-label">Date of Birth</td>
                <td colspan="2">
                    <div class="">
                        <input type="date" class="form-control"  placeholder="Date of birth" name="dob" required>
                    </div>
                </td>
            
              </tr>

    

              <tr>
                <th >D)</th>
                <td class="col-form-label">Address</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    
              </tr>

              <tr>
                <th >E)</th>
                <td class="col-form-label">Location</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="Add">
                    </div>
                    
              </tr>

              <tr>
                <th >F)</th>
                <td class="col-form-label">Contact No</td>
                <td colspan="2" class="col-form-label">
                    <div class="form-group">
                        <input type="text" class="form-control"  maxlength="10" name="contact_no" required>
                    </div>
                    
              </tr>

              <tr>
                <th >G)</th>
                <td class="col-form-label">Blood Group</td>
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
                <td class="col-form-label">Weight</td>
                <td colspan="2" class="align-items-lg-start">
                    <div class="form-group">
                        
                        <select class="form-select " aria-label="Default select example" name="weight" required>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                            <option value="61">61</option>
                            <option value="62">62</option>
                            <option value="63">63</option>
                            <option value="64">64</option>
                            <option value="65">65</option>
                            <option value="66">66</option>
                            <option value="67">67</option>
                            <option value="68">68</option>
                            <option value="69">69</option>
                            <option value="70">70</option>
                            <option value="71">71</option>
                            <option value="72">72</option>
                            <option value="73">73</option>
                            <option value="74">74</option>
                            <option value="75">75</option>
                            <option value="76">76</option>
                            <option value="77">77</option>
                            <option value="78">78</option>
                            <option value="79">79</option>
                          </select>
                      </div>
                    
              </tr>
          </table> 
          <div class="text-end">
          <input type="submit" class="btn btn-dark" value="Next" name="personal">
</div>
       </form>

         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>