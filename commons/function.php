<?php
// Hàm connection: dùng để kết nối csdl
function connection(){
    $host="localhost";
    $dbname="du_an_1";
    $username="root";
    $password="";
    $port="3306";

    try{
        $conn=new PDO("mysql:host=$host; dbname=$dbname; port=$port, charset=utf8",$username,$password );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e){
        echo "Lỗi kết nối CSDL: ".$e->getMessage();
    }
}

// hàm view: hàm dùng để hiển thị
/**
 * @param: $view: file trong thư mục view
 * @param: $data: dữ liệu được lấy gửi vào view
 * 
*/
function view($view, $data=[]){
    extract($data);
    include_once "views/$view.php";
}