<!-- Mảng liên kết -->
<form action="index.php" method="post">

    <input type="text" name="student">

    <input type="submit" >
</form>

<?php
    $grades = array("Long" => "A+" , "Pam" => "B-", "Oscar" => "C+");
    // $grades["Long"] = "F";
    // echo count($grades);
    echo $grades[$_POST["student"]];

