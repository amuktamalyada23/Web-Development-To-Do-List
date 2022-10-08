<?php
include('header1.php');
$name=$_POST['name'];
$pass=$_POST['password'];
$email=$_POST['email'];
$con=mysqli_connect('localhost','root','','ToDo');
$i=0;
$query="select * from users";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    if($name==$row['name'] && $email==$row['email'])
    {
        echo"<Center><h3 style='color:rgb(24,24,53);'>Account Already exists!<h3>
        <br>
        <img src='images/unsuccess.gif'><br>
        <a href='login.php'><button class='btn btn-warning'>Login</button></a></center>";
         $i=1;
         break;
    }
    else if($name==$row['name'] && $email!=$row['email'])
    {
        echo"<Center><h3 style='color:rgb(24,24,53);'>User Name Already exists!<h3>
        <br>
        <img src='images/unsuccess.gif'><br>
        <a href='signup.php'><button class='btn btn-warning'>Back To Signup</button></a></center>";
         $i=1;
         break;
    }
    else if($email==$row['email'] && $name!=$row['name'])
    {
        echo"<Center><h3 style='color:rgb(24,24,53);'>Email Already exists!<h3>
        <br>
        <img src='images/unsuccess.gif'><br>
        <a href='signup.php'><button class='btn btn-warning'>Back To Signup</button></a></center>";
         $i=1;
         break;
    }
}
if($i==0)
{
$q="Insert into users values('$i','$name','$email','$pass')";
$r=mysqli_query($con,$q);
    echo"<center>
    <h3 style='color:rgb(24,24,53);'>Account created successfully!<h3>
    <br>
    <img src='images/success.gif'>
    <br>
    <br>
    <a href='login.php'><button class='btn btn-warning'>Login</button></a></center>";
}
include('footer.php');
?>