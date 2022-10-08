
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
                break;
            }
        }
        $q="delete from `todo` where sno='$id'";
        $r=mysqli_query($con,$q);
        echo "<center>
        <h3 style='color:rgb(24,24,53);'>Deleted Successfully!</h3>
        <br>
        <img src='images/success.gif'>
        <br>
        <form action='todo.php' method='post'>
        <input type='hidden' name='name' value='$name'>
        <input type='submit' name='submit' value='Your To Do List' class='btn btn-warning'>
        </form>
        </center>";
    }
    else
    {
        echo '<center>
        <h3>An unexpected Error Occured!</h3><br><img src="images/unsucessful.gif">';
    }

    include('footer.php');
    ?>
