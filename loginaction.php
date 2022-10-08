<?php
include('header2.php');
$name=$_POST['name'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','ToDo');
$q="select * from users";
$r=mysqli_query($con,$q);
$error=0;
while($row=mysqli_fetch_array($r))
{
   $n=$row['name'];
   $p=$row['password'];
if($name==$n && $pass==$p)
{
    echo '<br>
    <div class="container">
    <center>
    <h3 style="color:rgb(24,24,53);">Login Successful!</h3>
    <br>
    <img src="images/success.gif">
    <br>
    <form action="todo.php" method="post">';
     ?>
   <input type="hidden"  name="name" value='<?php echo $name ?>'>
  <?php  echo '<input type="submit" class="btn btn-warning" value="Your To Do List">
    </form>
    </center>
    </div>';
    $error=0;
    break;
}
else if($name==$n && $pass!=$p)
{
    echo '<br>
    <div class="container">
    <center>
    <h3 style="color:rgb(24,24,53);">Login Unsuccessful!</h3>
    <br>
    <h6 style="color:rgb(24,24,53);">Invalid Password! </h6>
    <img src="images/unsuccess.gif" width="20%" height="15%">
    <br>
    <a href="login.php">
    <button class="btn btn-warning">Back To Login</button>
    </a> &nbsp;
    <a href="signup.php">
    <button class="btn btn-warning">Create An Account</button>
    </a>
    </center>
    </div>';
    $error=0;
    break;
}
else
{
    $error=1;
}
}
if($error==1)
{
    echo '<br>
    <div class="container">
    <center>
    <h3 style="color:rgb(24,24,53);">Login Unsuccessful!</h3>
    <br>
    <img src="images/unsuccess.gif" width="20%" height="15%">
    <br>
    <a href="signup.php">
    <button class="btn btn-warning">Create An Account</button>
    </a>
    </center>
    </div>';
}
include('footer.php');
?>