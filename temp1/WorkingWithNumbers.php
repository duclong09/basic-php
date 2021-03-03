<?php 
    // LÀm việc vs number:
    $number = 10;
  // $number++;
    $number += 25;  //number = number + 25 => 10 + 25 = 35;
    $number *=25; //875
    echo $number;
    echo "<hr>";
?>
<!-- ex2 -->
<?php 
    echo "<h6> <i>Exemple 2</i></h6>";
//  hàm abs là lấy giá trị tuyệt đối của một giá trị.
    echo abs(-100) . "<br>";
    // hàm pow thực hiện nhân đối số cho nhau:
    echo pow(2,4) . "<br>";
    // hàm sqrt trả về căn bậc hai của một số:
    echo sqrt(144) ."<br>";  //12
    // hàm max, tìm tổng số lớn nhất :
    echo "so lon nhat la: " . max(2,4,5) . "<br>" ;
    // round: hàm số làm tròn đơn vị:
    //ceil: làm tròn lên
    //floor: làm tròn xuống
    echo floor(4.2);

?>