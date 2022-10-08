<?php
include('header1.php');
?>
<br>
<center>
<div class="conatiner ">
    <form action="signupaction.php" method="post" class="container log">
        <center>
        <caption><h1>Sign Up</h1></caption><br>
        <label for="name">User Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">E-Mail id:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Password:&nbsp;</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Create Account" class="btn btn-dark"><br><br>
        <label for="signup">Already have an account?</label>
    <a href="login.php" style="color:rgb(24,24,53);text-decoration:underline;">Login</a>
</center>
    </form>
    
</div>
</center>
        <?php
 
include('footer.php');
?>