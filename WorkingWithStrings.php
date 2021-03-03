<!-- Chuỗi -->
<?php
$phrase = "Duc Long";
//chữ thường strolower($str), chữ hoa strtoupper($str):
$result = strtoupper($phrase);
echo $result . "<br />";
// chiều dài chuỗi gồm các khoảng trắng đầu và cuối chuỗi "": strlen($str);
$lengthStr = strlen($phrase);
echo $lengthStr . "<br />";

// $phrase[0] = "L"; 
// echo $phrase;

//echo $phrase[0]; 

// str_replace: là 1 chuỗi or 1 mảng vs các ký tự dc thay thế so vs mảng ban đầu:

$replace = str_replace("Duc", "Mango", $phrase);
echo $replace . "<br/>"; //Duclong => Mango Long.

// 
$sub = substr($phrase, 4, 2); //lấy ra chuỗi theo tham số chuyền vào.
echo $sub;
//     addcslashes($str, $char_list)
// addslashes($str)
// bin2hex($str)
// chop($string, $charList)
// crc32($string)
// explode($separator, $string, $limit)
// implode($separator, $array)
// strlen($string)
// str_word_count($string)
// str_repeat($string, $repeat)
// str_replace($find, $replace, $string)
// md5($string).
// sha1($string)
// htmlentities($string), htmlspecialchars($string)
// htmlspecialchars_decode($string), html_entity_decode($string)
// strip_tags($string, $allow)
// substr(string,start,length)
// strtolower($string)
// strtoupper($string)
// ucword($string)
// ucfirst($string)
// trim($string, $charlist)
// ltrim($tring,$charlist)
// rtrim($tring,$charlist)

?>

<!-- //PHP Programming Language Tutorial - Full Course -->