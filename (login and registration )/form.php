<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formcss.css">
    
    <title>form</title>
</head>
<body>
    <div class="formdiv">
   <form class="form" action="/php/dir/registrationform/form.php" method="post" >
       
       <h2>Registration form</h2>
       <label for="user">USERNAME</label>
       <input type="text"  name="username"  id="user" required ></input>
       <label for="email">EMAIL ID</label>
       <input type="text" name="email"  id="email"required ></input>
       <label for="password">PASSWORD</label>
       <input type="text" name="password"  id="password"required ></input>
       <label for="rpassword">REPEAT PASSWORD </label>
       <input type="text" name="rpassword" id="rpassword" required ></input>
      
       <button type="submit"  name="submit"   id="button" >Register</button>

   </form> 
   </div>
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
$countuser=mysqli_num_rows($emailvalue);

if($countuser or $countemail>0)
{
    ?>
    <script>
    alert("username or email already exists");
    </script>;
    <?php
}
else{
    if($passwd===$rpassword ){
        
        $query="insert into formfield (Username, Email, Password, Repassword) values ( '$username','$email','$passwd', '$rpassword')";
        mysqli_query($conn,$query);
        
       }
    else{
        ?>
        <script>
        alert("Please type the same password);
        </script>
        <?php
    }
}
// total no of user who signed up ..
$countquery= " select * from formfield ";
$countv=mysqli_query($conn,$countquery);
$count=mysqli_num_rows($countv);
$newtablequery="update datatable set total_user='$count'";
mysqli_query($conn,$newtablequery);

}

