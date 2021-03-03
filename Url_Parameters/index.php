<!-- Tham số url -->
<form action="index.php" method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
</form>

<?php echo $_GET["name"] ?>