<?php
include('header2.php');
$con=mysqli_connect('localhost','root','','ToDo');
$name=$_POST['name'];
$value=$_POST['value'];
$i=0;
//echo "$name +' '+$value";
$q="Insert into todo values('$i','$name','$value')";
$r=mysqli_query($con,$q);
if($r)
{
    echo '<center>
    <h3 style="color:rgb(24,24,53);">Added to the list successfully!</h3><br><img src="images/success.gif"><br>
    </center>';
}?>
<center>
<form action="todo.php" method="post">
<input type="hidden"  name="name" value='<?php echo "$name" ?>'>
<input type="submit" value="Your To Do List" class="btn btn-warning">
</form>
</center>
<?php
include('footer.php');
?>