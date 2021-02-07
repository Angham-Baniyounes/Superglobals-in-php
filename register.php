<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet" />
    <link rel="stylesheet" href="indexStyle.css"/>
    <title>Register</title>
      <style>
        .content {
        margin-top: 8rem;
        }
      </style>
  </head>
  <body>
    <div class="container">
        <div class="content">
            <div class="row">
            <div class="col-md-6">
                <img
                src="./images/undraw_remotely_2j6y.svg"
                alt="Image"
                class="img-fluid"
                />
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-4">
                    <h3>Register</h3>
                    </div>
                    <form action="profile.php" method="post">
                    <div class="form-group first">
                        <label for="firstname">First Name :</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required/>
                    </div>
                    <div class="form-group first">
                        <label for="lastname">Last Name :</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required/>
                    </div>
                    <div class="form-group first">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="form-group first">
                        <label for="mobile">Mobile Number :</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" required/>
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" id="password" required/>
                    </div>
                    <input
                        type="submit"
                        value="Log Out"
                        class="btn btn-block btn-primary"
                    />
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            if($firstname == NULL || $lastname == NULL || $email == NULL || $mobile == NULL || $password == NULL )
            {
                echo "<script language='javascript'> alert(\"Some of the fields are empty.\");</script>";
            }
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous" ></script>
</body>
</html>
