<!-- <form action="index.php" method="get">

    Password: <input type="password" name="password"> <br>
    <input type="submit">

</form>
<br>

#$_GET
 -->


<form action="index.php" method="post">

    Password: <input type="password" name="password"> <br>
    <input type="submit">

</form>
<br>


<!-- #$_POST -->
<?php echo $_POST["password"] ?>