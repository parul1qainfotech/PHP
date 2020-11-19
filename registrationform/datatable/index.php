<?php
$servername="localhost";
$username="root";
$password="";
$database="formdata";

$conn=mysqli_connect($servername,$username,$password,$database);
$query=mysqli_query($conn,'select * from formfield');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables.bootstrap.min.css">

</head>
<body 
<div class="container" style="margin-top:20px;">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Repassword</th>
               
            </tr>
        </thead>
        <tbody>
            <?php while($value=mysqli_fetch_object($query)): ?>
            <tr>
                <td><?php echo $value-> Username;?></td>
                <td><?php echo $value-> Email;?></td>
                <td><?php echo $value-> Password;?></td>
                <td><?php echo $value-> Repassword;?></td>  
            </tr>
<?php endwhile; ?>
            
         
</tbody>
    </table>
    </div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="datatable.jquery.min.js"></script>
    <script type="text/javascript" src="datatables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() 
    {
    $('#example').DataTable();
} );
</script>
 </body>
</html>