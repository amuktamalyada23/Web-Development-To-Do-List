    <?php
    include('header2.php');
    $con=mysqli_connect('localhost','root','','ToDo');
        $name=$_POST['name'];
        $id=$_POST['sno'];
        $value=$_POST['value'];
       /* echo "$id";
        echo "$name";
        echo "$value"; */
        $q="update `todo` set value='$value' where sno=$id";
        $r=mysqli_query($con,$q);
        echo "<center>
        <h3 style='color:rgb(24,24,53);'>Updated Successfully!</h3>
        <br>
        <img src='images/success.gif'>
        <br>
        <form action='login.php' method='post'>
        <input type='hidden' name='name' value='$name'>
        <input type='submit' name='submit' value='You Need TO Login Again!' class='btn btn-warning'>
        </form>
        </center>";
    include('footer.php');
    ?>
