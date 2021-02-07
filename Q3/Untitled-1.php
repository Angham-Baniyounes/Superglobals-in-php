<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" href="../indexStyle.css"/>
        <title>Q3: Calculator</title>
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }
            /* Firefox */
            input[type=number] {
            -moz-appearance: textfield;
            }
        </style>
	</head>
	<body>
    <?php    
        ini_set('display_errors',0); 
        if( isset( $_POST['submit'] )) {
                $num1 = $_POST['firstNum'];
                $num2 = $_POST['secondNum'];
                $opr = $_POST['operator'];
                $result = 0;
                switch ($opr) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        $result = $num1 / $num2;
                        break;
                    default:
                        $result = 0;
                        break;
                }
                if($num1 == NULL || $num2 == NULL)
                {
                    echo "<script language='javascript'> alert(\"Some of the fields are empty.\");</script>";
                }
            }
        ?>	
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4">         
                            <form method="post">
                                <table>
                                    <tr>
                                        <td>Enter First Number</td>
                                        <td colspan="1"><input name="firstNum" type="number" /></td>
                                    </tr>
                                    <tr>
                                        <td>Select Operator</td>
                                        <td>
                                            <select name="operator" style="width: 180px">
                                                <option value="none" selected disabled hidden>Select an Operator</option>
                                                <option>+</option>
                                                <option>-</option>
                                                <option>*</option>
                                                <option>/</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Enter Second Number</td>
                                        <td><input name="secondNum" type="number" /></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="submit" name="submit"> = </button></td>
                                    </tr>
                                    <tr>
                                        <td>Result = </td>
                                        <td ><?php echo $result;?></td>
                                        
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>