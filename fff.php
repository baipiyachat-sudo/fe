<?php
header("Content-Type: text/html; charset=utf-8");
// รับค่าชื่อจาก URL เช่น hello.php?name=สมชาย
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "ผู้เยี่ยมชม";
echo "สวัสดี " . $name; 88888888888888888
?>