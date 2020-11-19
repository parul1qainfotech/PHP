
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<form class="cal" method="post" action="/php/dir/calculator/cal3.php">
<?php
 $input=$_POST['number'];


            if($_SERVER['REQUEST_METHOD']=='POST')
            {
          
           echo '<label for="opera" name="operatons">operation want to perform </label>
                        <select type="text"  id="opera" name="operations">
                            <option value="+">add</option>
                            <option value="-">sub</option>
                            <option value="*">mul</option>
                            <option value="/">divide</option>
                        </select>
                        <label for="input">Enter the inputs</label>';


            for($i=0;$i<$input;$i++){
            echo '<input type="text" id="input" name="input'.$i.'"></input>';
            }
            echo'<input type="hidden" id="no_of_input" name="number" value="'.$input.'"></input>';
            echo ' <button name="submit" class="submit">submit</button> ';
        }
           
        $operation= $_POST['operations'];
        $res=0;
        $input=$_POST['number'];
    
      
         switch($operation)
         {
             case '+': 
                
                 for($i;$i<$input;$i++)
                 {
                     $res+=$_POST["input$i"];
                    
                 }
               
                 break;
     
             case '-':
                 
                 for($i;$i<$input;$i++)
                 {
                     $res-=$_POST["input$i"];
                 
             
                 break;
             }
     
             case '*':
                
                 for($i;$i<$input;$i++)
                 {
                     $res*=$_POST["input$i"];
                 }
               
                 break;
     
             case '/':
                
                 for($i;$i<$input;$i++)
                 {
                     $res/=$_POST["input$i"];;
                 }
             
                 break;
     
             default:
             break;
        
     echo "<h2 ><i>RESULT IS : {$res}</i><h2>";  
            ?>
</form>
</body>
</html>
