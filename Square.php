<?php

namespace model\Models;
include 'Rectangle.php';
// kế thừa class Rectangle
// sử dụng các biến và function
// nếu có thể truy cập được!
class Square extends Rectangle implements \Shape,\Action
{

    // Trait : đa kế thừa PHP!!!
    function echoName()
    {
    }
    function echoInfo()
    {
    }

    // tồn tại độc lập ko phụ thuộc vào class
    static $pi = 3.14;
    // biến hằng số với từ khoá const
    // chỉ cấp phát giá trị lần đầu
    // ko thay đổi được
    const HANG_SO = 100;
    // hàm khởi tạo
    public function __construct($size)
    {
        // tái sử dụng hàm khởi tạo của lớp cha
        // với từ khoá parent::
        parent::__construct($size, $size);
    }

    function tinhChuVi(){
        // truy cập biến W, H từ lớp cha
        $chuVi = $this->width + $this->height;
        return $chuVi;
    }

    function tinhDienTich(){
        // goi function của lớp cha !!!
        $this->dienTich();
    }
// nếu sử dụng info sẽ bị lỗi do
// function info có từ khoá final ở lớp cha
//    function info(){
//        $this->info();
//    }
    function chuVi1($w, $h)
    {
       // dinh nghia phan than cho phuong thuc
        // cua interface
    }

    function dienTich1($w, $h)
    {
        // dinh nghia phan than cho phuong thuc
        // cua interface
    }

    function run($w, $h)
    {

    }

    function display($w, $h)
    {

    }
}