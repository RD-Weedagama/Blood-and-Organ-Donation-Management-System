
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Contact Us</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(c.jpg);
    background-size: cover;
    font-family: sans-serif;
    width: 100%;
	height: 100vh;
	display: grid;
	align-items: center;
   
    
    
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

    width: 80%;
	height: auto;
	margin: auto;
	display: flex;
	flex-wrap: wrap;
	padding: 10px;
	border-radius: 10px;
	background: #fff;
	box-shadow: 0px 0px 10px 0px #666;
      
}

*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}



.contact-map
{
	width: 100%;
	height: auto;
	flex: 50%;
}
.contact-map iframe
{
	width: 100%;
	height: 100%;
}
.contact-form
{
	width: 100%;
	height: auto;
	flex: 50%;
	padding: 30px;
	text-align: center;
}
.contact-form h1
{
	margin-bottom: 10px;
}

.contact-form-txt
{
	width: 100%;
	height: 40px;
	color: #000;
	border: 1px solid #bcbcbc;
	border-radius: 50px;
	outline: none;
	margin-bottom: 20px;
	padding: 15px;
}
.contact-form-txt::placeholder
{
	color: #aaa;
}
.contact-form-textarea
{
	width: 100%;
	height: 130px;
	color: #000;
	border: 1px solid #bcbcbc;
	border-radius: 10px;
	outline: none;
	margin-bottom: 20px;
	padding: 15px;
	font-family: 'Poppins', sans-serif;
}
.contact-form-textarea::placeholder
{
	color: #aaa;
}

.btn1
{
    border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
}
.btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
      }
          
    </style>
  </head>
  <body>
    
    
    <div class="login-box">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.293476317137!2d81.00266541409358!3d6.356044226852406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae41d36f62e92c9%3A0xdec276fa51939f1d!2sGeneral%20Sir%20John%20Kotelawala%20Defence%20University%2C%20Southern%20Campus!5e0!3m2!1sen!2slk!4v1632749858794!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form">
            <h1>Contact Us</h1>
            <form action="controlleradmindata.php" method="POST">
                <input type="text" placeholder="Name" name="name" class="contact-form-txt" />
                <input type="text" placeholder="Email" name="email" class="contact-form-txt" />
                <textarea placeholder="Message" name="message" class="contact-form-textarea"></textarea>
                <input class="form-control button btn1 my-3" type="submit" name="contact" value="Send">
            </form>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>