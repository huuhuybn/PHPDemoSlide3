<?php
include 'Square.php';


$square = new \model\Models\Square(40);
// gọi biến pi từ class Square
// ko cần khởi tạo instance
echo \model\Models\Square::$pi;
echo \model\Models\Square::HANG_SO;
$square->info(); // info là funtion ở lớp cha
// của square
$square->tinhDienTich();
echo $square->tinhChuVi();

echo $square->width;
// infoMenu la function trong trait
echo $square->infoMenu();

echo $square->getWidth();
// Kiểm tra kiểu class của 1 instance
if ($square instanceof \model\Models\Square){
// True
    echo  "Square " . '</br>';
}

if ($square instanceof \model\Models\Rectangle){
// True
    echo  "Rectangle  " . '</br>';
}

if ($square instanceof \model\Models\StudentModel){
// false
    echo  "StudentModel " . '</br>';
}


