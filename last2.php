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
      <h1>Your password is wrong .Please try again.</h1><br/>
      <form method="post" action="last2.php">

        <div class="form-row">
              <div class="form-group col-md-4 ">
                    <label for="inputEmail4"></label>
                    <input type="password" class="form-control " id="inputEmail4" name="password" placeholder="password">
              </div>
        </div>

        <div class="form-row">
              <div class="form-group col-md-4 ">
                    <label for="inputEmail4"></label>
                    <input type="password" class="form-control " id="inputEmail4" name="cpassword" placeholder="confirm password">
              </div>
        </div>

  <a href="last2.php"><input type="submit" class="btn btn-primary buttonwala" name="button" value="Submit" ></a>
    </form>

    <?php
    @$cp=$_POST["cpassword"];//$_SESSION['otp'];//yaad rak
    @$p=$_POST["password"];
      if(isset($cp))
      {
        if($p==$cp)
        {
          header("Location: http://localhost/lm/last.php");
        }
      else {
      unset($p);
      unset($cp);
         header("Location: http://localhost/lm/last2.php");
        }
      }
      ?>

  </div>
  </body>
  </html>
