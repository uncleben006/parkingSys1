<?php
include("./include/selectDB.php");
include("./headerBeforeLogin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row main-low-margin text-center">

            <h1>Login in</h1>
                <form action="checkUser.php" method="post">
                    <table style="width:50%">
                        <tr>
                            <td>user</td>
                            <td><input type="text" name="user" style="width:100%"/></td>
                        </tr>
                        <tr>
                            <td>pass</td>
                            <td><input type="password" name="pass" style="width:100%"/></td>
                        </tr>
                        <tr>
                            <td><a href="signup.php" >sign up</a></td>
                            <td><button type="submit" style="width:50%">login</button></td>                          
                        </tr>
                        <?php  
                            if(isset($_GET["wrong"])==TRUE&&$_GET["wrong"]==1)
                            {
                                echo "<tr><font color=\"red\">Account doesn't exist .</font></tr>";
                            }
                        ?>
                    </table>    
                </form>
        </div>
    </div>
</body>


