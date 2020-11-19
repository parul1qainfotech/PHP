<?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
            $input=$_POST['number'];
        }
            
            ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   <form  action="/php/dir/calculator/index.php" method="post" class="cal">
       <label for="no_of_input" >Enter the no of input</label>
       <input type="text" id="no_of_input" name="number"></input>
       <label for="operations" name="operaton">operation want to perform</label>
                        <select type="text" id="operations">
                            <option name="add"> add</option>
                            <option name="sub"> sub</option>
                            <option name="mul"> mul</option>
                            <option name="divide"> divide</option>
                        </select>
                        <label for="input">Enter the inputs</label>
                        <input type="text" id="input" name="input"></input>
                        <button name="submit" class="submit">submit</button>
            </form> 
  
</body>
</html>

