<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formcss.css">
    
    <title>form</title>
</head>
<body>
<script src="formjs.js"></script>
    <div class="formdiv">
   <form class="form" action="/php/dir/registrationform/form.php" method="post" name="myform" onubmit="return validate()" >
       
       <h2>Registration form</h2>
       <label for="user">USERNAME</label>
       <input type="text"  name="username"  id="user"  placeholder="username" class="form-control" ></input>
        <span id="validate1"></span>


       <label for="email">EMAIL ID</label>
       <input type="text" name="email"  id="email"placeholder="Email id" ></input>
       <span id="validate2"></span>

       <label for="password">PASSWORD</label>
       <input type="password" name="password"  id="password" placeholder="Password" ></input>
       <span id="validate3"></span>

       <label for="rpassword">REPEAT PASSWORD </label>
       <input type="password" name="rpassword" id="rpassword"  placeholder="repassword" ></input>
       <span id="validate4"></span>
      
       <button type="submit"  name="submit"   id="button" >Register</button>

   </form> 
   </div>

   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
<script src="validation.js"></script>
</body>
</html>


<?php
$servername="localhost";
$username="root";
$password="";
$database="formdata";

$conn=mysqli_connect($servername,$username,$password,$database);
//if(!$conn){
//    die("error".mysqli_connect_error());
//}
//else{
//    echo "success";
//}

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $passwd=$_POST['password'];
    $rpassword=$_POST['rpassword'];

  
$userquery= "select * from formfield where Username='$username'";
$datavalue=mysqli_query($conn,$userquery);

$emailquery= " select * from formfield where Email= '$email'";
$emailvalue=mysqli_query($conn,$emailquery);
$countemail=mysqli_num_rows($emailvalue);
$countuser=mysqli_num_rows($datavalue);

    if($countuser>0)
    {?>
        <script>
          document.getElementById("validate1").innerHTML="Username already exists";
        </script>
        <?php
        }
    elseif($countemail>0)
    {?>
        <script>
         document.getElementById("validate2").innerHTML="Email-id already exists";
        </script>
        <?php
        }



elseif($passwd===$rpassword){
        
        $query="insert into formfield (Username, Email, Password, Repassword) values ( '$username','$email','$passwd', '$rpassword')";
        mysqli_query($conn,$query);
        
       }


// total no of user who signed up ..
$countquery= " select * from formfield ";
$countv=mysqli_query($conn,$countquery);
$count=mysqli_num_rows($countv);
$newtablequery="update datatable set total_user='$count'";
mysqli_query($conn,$newtablequery);

}

