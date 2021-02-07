<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <title>Calculator</title>
        <style>
            select {
                width: 200px;
            }
        </style>
	</head>
<body>
    <?php                   
        if( isset( $_POST['calculate'] )) {
            
            $operator=$_POST['operator'];
            if($operator=="+")
            {
                $var1 = $_POST['input1'];
                $var2 = $_POST['input2'];
                $result= $var1+$var2;
            }
            if($operator=="-")
            {
                $var1 = $_POST['input1'];
                $var2 = $_POST['input2'];
                $result= $var1-$var2;
            }
            if($operator=="*")
            {
                $var1 = $_POST['input1'];
                $var2 = $_POST['input2'];
                $result =$var1*$var2;
            }
            if($operator=="/")
            {
                $var1 = $_POST['input1'];
                $var2 = $_POST['input2'];
                $result= $var1/$var2;
            }
            if($_POST['input1']==NULL || $_REQUEST['input2']==NULL)
            {
            echo "<script language=javascript> alert(\"Some of the fields are empty.\");</script>";
            }
        }
?>	
    <div class="content">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-6 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4">
                        <form method="post" action="index.php">
                            <input name="firstNumber" type="text" class="form-control" style="width: 150px; display: inline" placeholder="Enter a number"/>
                            <br>
                            <select name="operator">
                                <option value="+"> + </option>
                                <option value="-"> - </option>
                                <option value="*"> * </option>
                                <option value="/"> / </option>
                            </select>
                            <br>
                            <input name="secondNumber" type="text" class="form-control" style="width: 150px; display: inline" placeholder="Enter a number"/>
                            <br>
                            <button type="submit" class="btn btn-primary">Calculate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</body>
</html>