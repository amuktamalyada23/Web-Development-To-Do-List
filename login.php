<?php
include('header1.php');
?>
<br>
<center>
<div class="conatiner ">
    <form action="loginaction.php" method="post" class="container log">
        <center>
        <caption><h1>Login</h1></caption><br>
        <label for="name">User Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="password">Password:&nbsp;</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login" class="btn btn-dark"><br><br>
        <label for="signup">Don't have an account? </label>
    <a href="signup.php" style="color:rgb(24,24,53);text-decoration:underline;">Sign up</a>
</center>
    </form>
    </div>
</center>
<?php
include('footer.php');
?>