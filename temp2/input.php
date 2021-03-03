<!-- Thục hiện đầu vào của người dùng -->


<form action="input.php" method="get">
    name: <input type="text" name="username">
    <br>
    age : <input type="number" name="age">
    <input type="submit">
</form>

<!-- __Get gui len -->
Username: <?php echo $_GET["username"] ?>
<br>
Age: <?php echo $_GET["age"] ?>

