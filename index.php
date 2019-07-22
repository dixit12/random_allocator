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
    <form method="post" action="insert.php">

      <div class="form-row">
            <div class="form-group col-md-4 ">
                  <label for="inputEmail4"></label>
                  <input type="text" class="form-control " id="inputEmail4" name="name" placeholder="Name">
            </div>
      </div>

      <div class="form-row">
            <div class="form-group col-md-4 ">
                  <label for="inputEmail4"></label>
                  <input type="text" class="form-control " id="inputEmail4" name="fname" placeholder="Parents Name">
            </div>
      </div>

      <div class="form-row">
            <div class="form-group col-md-4 ">
                  <label for="inputEmail4"></label>
                  <input type="email" class="form-control " id="inputEmail4" name="email" placeholder="E-mail">
            </div>
      </div>

        <div class="form-row">
              <div class="form-group col-md-4 ">
                    <label for="inputEmail4"></label>
                    <input type="text" class="form-control " id="inputEmail4" name="percentage" placeholder="Class 12 percentage">
              </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-4 ">
                      <label for="inputEmail4"></label>
                      <input type="text" class="form-control " maxlength="10"  name="number" placeholder="Mobile Number">
                </div>
            </div>

            <div class="form-row">
                  <div class="form-group col-md-4 ">
                        <label for="inputEmail4"></label>
                        <input type="text" class="form-control " maxlength="16" id="inputEmail4" name="aadhar" placeholder="Aadhar Card Number">
                  </div>
              </div>

          <div class="form-row">
                <div class="form-group col-md-4 ">
                      <label for="inputEmail4"></label>
              <select id="inputState" class="form-control" name='gender' >
                  <option selected >Gender</option>
                  <option value="f" >Male</option>
                  <option value="m" >Female</option>
                  <option value="o" >Other</option>
              </select>
          </div>



<a href="insert.php"><input type="submit" class="btn btn-primary buttonwala" name="button" value="Submit" ></a>
  </form>

  </div>





  </body>

  </html>
