<?php
include('header2.php');
$con=mysqli_connect('localhost','root','','ToDo');
$name=$_POST['name'];
echo '<center>
<div class="todopage">
<br>
<h3>To Do List</h3>';
$q="select * from `todo`";
$r=mysqli_query($con,$q);
$i=1;
echo '<table class="table">';
/*echo '
<tr>
<th><center> S No. </center></th>
<th><center>List</center></th>
<th><center>Operations</center></th>
</tr>';
*/
while($row=mysqli_fetch_array($r))
{
    if($row['name']==$name)
    {

        $value=$row['value'];
        $v=$row['sno'];
        echo "<tr>
        <td>
        <input type='button' style='background-color:#FFFF33;border:none;font-size:20px' value=' $value ' maxlength='255'>
                &nbsp;
                </td>
                <td>
                <a href='updateview.php?sno=".$v."'>
        <button class='btn'>Upadte</button>
        </a>
        <a href='delete.php?sno=".$v."'>
        <button class='btn'>Delete</button>
        </a>
        </td>
        </tr>
        </center>
        <br>";
        $i++;
    }
}
echo "</table>";
if($i==1)
{
    echo "<center><h6 style='color:rgb(24,24,53);'>Your List Is Empty!</h6></center>";
}
?>
<br>

<form action="add.php" method="post" class="container">
    <input type="hidden"  name="name" value='<?php echo "$name" ?>'>
 &nbsp;<input type="text" name="value" required>
 <input type="submit" value="Add" class="btn">
 <br><br>
</form>
<?php
echo'</div></center><br>';
?>
<br><br>
</form>
</center>
<?php
include('footer.php');
?>