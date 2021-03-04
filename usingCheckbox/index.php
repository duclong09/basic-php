<!-- Sử dụng hộp kiểm tra -->
<form action="index.php" method="post">

    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Oranges: <input type="checkbox" name="fruits[]" value="orange"> <br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
    <input type="submit">

</form>
 <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[1];
 ?>