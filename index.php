<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="wrapper">

        <div>
            <h1>Calculator</h1>
        </div>
        <form action="#" method="POST" name="form">
            <div class="first_num">
                <label for="first_num"><b>Number 1</b></label>
                <input type="text" name="first_num" id="first_num" placeholder="Enter the number..." autofocus>
            </div>
            <div class="operator">
                <select class="select" name="operator" id="operator">
                    <option value="operation" selected >Choose an operation</option>
                    <option value="Add">+</option>
                    <option value="Subtract">-</option>
                    <option value="Multiply">*</option>
                    <option value="Divide">/</option>
                </select>
            </div>
            <div class="second_num">
                <label for="second_num"><b>Number 2</b></label>
                <input type="text" name="second_num" id="second_num" placeholder="Enter the number...">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Calculate">
                <input type="submit" name="reset" value="Reset">
            </div>
        </form>

        <h2><b>Result:</b></h2>
        <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['first_num']) && ($_POST['second_num'])){
               if(is_numeric($_POST['first_num']) && is_numeric($_POST['second_num'])){
            
            $first_number = $_POST['first_num'];
            $second_number = $_POST['second_num'];
            $operator = $_POST['operator'];
             
            switch ($operator){
                    
                case "operation":
                    echo "Choose an operator,please.";
                    break;
                case "Add":
                   $result = $first_number + $second_number;
                    echo "<b>$result</b>";
                    break;
                case "Subtract":
                   $result = $first_number - $second_number;
                    echo "<b>$result</b>";
                    break;
                case "Multiply":
                  $result = $first_number * $second_number;
                    echo "<b>$result</b>";
                    break;
                case "Divide":
                  $result = $first_number / $second_number;
                    echo "<b>$result</b>";
                    break;
            }    
                }else{
                      echo "You must enter numerics!";
               }
        
                }else{
                      echo "You must enter both numbers.";
            }
        }
?>

    </div>
</body>

</html>
