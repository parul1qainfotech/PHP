
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   <form  action="/php/dir/calculator/cal.php" method="post" class="cal">
       <label for="no_of_input" >Enter the no of input</label>
       <input type="text" id="no_of_input" name="number"></input>
       <button name="submit" class="submit" type="submit">submit </button>
            </form> 

<form class="cal" action="/php/dir/calculator/cal3.php " method="post" >
 <?php
 
 $i=0;

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $input=$_POST['number'];
           echo ' <label for="opera" name="operatons">operation want to perform</label>
                        <select type="text"  id="opera" name="operations">
                            <option value="+">add</option>
                            <option value="-">sub</option>
                            <option value="*">mul</option>
                            <option value="/">divide</option>
                        </select>
                        <label for="input">Enter the inputs</label>';

     
            for($i;$i<$input;$i++){
            echo '<input type="text" id="input" name="input'.$i.'"></input>';
            }
            echo'<input type="hidden" id="no_of_input" name="number" value="'.$input.'"></input>';
            echo ' <button name="submit" class="submit">submit</button> ';
        }
               
            ?>

</form>

 
</body>
</html>

