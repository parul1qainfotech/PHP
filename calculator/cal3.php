<?php
   $operation= $_POST['operations'];
$res=0;
   $i=0;
   $input=$_POST['number'];
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     
 
    switch($operation)
    {
        case '+': 
           
            for($i;$i<$i+1;$i++)
            {   
                $temp=$_POST["input$i"];
                $res=$temp;
                for($j=$i+1;$j<$input;$j++){
                    
                    $res+=$_POST["input$j"];
                    
                }
            break;
           
            }
            break;
          
            break;

        case '-':
            
            for($i;$i<$i+1;$i++)
            {   
                $temp=$_POST["input$i"];
                $res=$temp;
                for($j=$i+1;$j<$input;$j++){
                    
                    $res-=$_POST["input$j"];
                    
                }
            break;
           
            }
            break;
     

        case '*':
           
            for($i;$i<$i+1;$i++)
            {   
                $temp=$_POST["input$i"];
                $res=$temp;
                for($j=$i+1;$j<$input;$j++){
                    
                    $res*=$_POST["input$j"];
                    
                }
            break;
           
            }
            break;

        case '/':
           
            for($i;$i<$i+1;$i++)
            {   
                $temp=$_POST["input$i"];
                $res=$temp;
                for($j=$i+1;$j<$input;$j++){
                    
                    $res/=$_POST["input$j"];
                    
                }
            break;
           
            }
            break;

        default:
        break;
    }


 }   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="index.css">

</head>
<body>
<h2 class="h2">Result is <?php echo $res; ?> <h2>  
</body>
</html>
