<!doctype html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
       <link rel = "stylesheet"  href = "css/style44.css" />



        <style>
      /*  body{
          background-image: url(img/1.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        }*/
        </style>


    </head>

  <body>
  <div class="container ">
    <form method="post" action="check.php">

      <div class="form-row">
            <div class="form-group col-md-4 ">
                  <label for="inputEmail4"></label>
                  <input type="text" class="form-control " id="inputEmail4" name="bmw" placeholder="OTP">
            </div>
      </div>

<a href="check.php"><input type="submit" class="btn btn-primary buttonwala" name="button" value="Submit" ></a>
  </form>

  <?php
      $val="666";//$_SESSION['otp'];//yaad rak
      @$enter=$_POST["bmw"];
      if(isset($enter))
      {
        if($val==$enter)
        {
          header("Location: http://localhost/lm/thank.php");
        }
        else {
          header("Location: http://localhost/lm/wrong.php");
        }


          }



  ?>

  </div>





  </body>

  </html>
