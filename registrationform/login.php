<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formcss.css">
    <title>form</title>
    
</head>
<body>
    <div class="formdiv">
   <form action="/php/dir/registrationform/login.php" method="post" class="form">
       
       <h2>Login form</h2>
       <label for="user">USERNAME</label>
       <input type="text"  name="usernames"  id="user" required placeholder="username"></input>
       <span id="validate1"></span>

       <label for="password">PASSWORD</label>
       <input type="password" name="passwords"  id="password"required placeholder="password"></input>
       <span id="validate2"></span>

       <button type="submit"  name="submits"   id="button" >Login</button>

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

if(isset($_POST['submits'])){

    $user=$_POST['usernames'];
    $pass=$_POST['passwords'];

    $loginuser="select * from formfield where Username='$user'";
    $loginpass="select * from formfield where Password='$pass'";
    $userval=mysqli_query($conn,$loginuser);
    $passval=mysqli_query($conn,$loginpass);
    $u=mysqli_num_rows($userval);

    $p=mysqli_num_rows($passval);
    if ($u>0 and $p>0){
        ?>
        <script>
        alert("login success");
        </script>;
        <?php
    }
    elseif($u==0){
            ?>
            <script>
            document.getElementById("validate1").innerHTML="Incorrect username";
            </script>;
            <?php
        
        }
        else{
            ?>
            <script>
          document.getElementById("validate2").innerHTML="Incorrect password";
            </script>;
            <?php
        
        }
       
    
}


?>