<!doctype html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
       <link rel = "stylesheet"  href = "css/style44.css" />

        <title>E-Rickshaw</title>

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
      <h1>THANKS FOR SIGHING UP.</h1><br/>
      <form method="post" action="thank.php">

        <div class="form-row">
              <div class="form-group col-md-4 ">
                    <label for="inputEmail4"></label>
                    <input type="password" class="form-control " id="inputEmail4" name="password" placeholder="Set your password">
              </div>
        </div>

        <div class="form-row">
              <div class="form-group col-md-4 ">
                    <label for="inputEmail4"></label>
                    <input type="password" class="form-control " id="inputEmail4" name="cpassword" placeholder="confirm password" >
              </div>
        </div>

        <a href="thank.php"><input type="submit" class="btn btn-primary buttonwala" name="button" value="Submit" ></a>
    </form>

    <?php
    @$cp=$_POST["cpassword"];//$_SESSION['otp'];//yaad rak
    @$p=$_POST["password"];

      if(isset($cp)==1)
      {
        if($p==$cp)
        {
          header("Location: http://localhost/lm/last.php");
        }
      else
         {

         header("Location: http://localhost/lm/last2.php");

        }
      }
      ?>

  </div>
  </body>

  </html>
