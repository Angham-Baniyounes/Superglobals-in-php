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
    <link rel="stylesheet" href="profileStyle.css"/>
    <title>Profile</title>
    <style>
        .inf-content{
            border:1px solid #DDDDDD;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
            margin-top: 5rem !important;
            padding: 1.5rem;
        }	
    </style>
  </head>
  <body>
    <?php
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
    ?> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<?php include 'navbar.php'; ?>
		</ul>
	</nav>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="./images/female-avatar.jpg" data-original-title="Usuario"> 
                    <ul title="Ratings" class="list-inline ratings text-center">
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <strong>Information</strong><br>
                    <div class="table-responsive">
                    <table class="table table-user-information">
                        <tbody>
                            <tr>    
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-user  text-primary"></span>    
                                        First Name                                                
                                    </strong>
                                </td>
                                <td class="text-primary">
                                <?php echo "$firstname"; ?>   
                                </td>
                            </tr>
                            <tr>        
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                        Lastname                                                
                                    </strong>
                                </td>
                                <td class="text-primary">
                                <?php echo "$lastname"; ?>  
                                </td>
                            </tr>
                            <tr>        
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                        Email                                                
                                    </strong>
                                </td>
                                <td class="text-primary">
                                <?php echo "$email"; ?>   
                                </td>
                            </tr>   
                            <tr>        
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                        Mobile Number                                               
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    <?php echo "$mobile"; ?>     
                                </td>
                            </tr>                                
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"
        ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>                                        