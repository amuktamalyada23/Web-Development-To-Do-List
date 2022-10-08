<?php
include('header2.php');
$con=mysqli_connect('localhost','root','','ToDo');
if(isset($_GET['sno']))
{
    $id=$_GET['sno'];
    $query="select * from todo";
    $result=mysqli_query($con,$query);
    $name='';
    while($row=mysqli_fetch_array($result))
    {
        if($row['sno']==$id)
        {
            $name=$row['name'];
            ?>
            <center>
<div class="conatiner ">
    <form action="update.php" method="post" class="container todo">
        <center>
        <caption><h1>Update Your To Do List</h1></caption><br>
        <input type="hidden" value= ' <?php echo $name ?> ' name="name">
        <input type="hidden" value= ' <?php echo $id ?> ' name="sno">
        <input type="text" name="value"  required><br><br>
        <input type="submit" value="Update" class="btn btn-dark"><br><br>
</center>
    </form>
    </div>
</center>
            <?php
            break;
        }
    }   
}
include('footer.php');